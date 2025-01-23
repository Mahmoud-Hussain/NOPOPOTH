<?php
session_start();
include("db_connect.php");

if (!isset($_SESSION['user_id'])) {
    echo "You must be logged in to send a message.";
    header("Location: signin.php");
}

$receiver_id = $_SESSION["user_id"];

$sql = "SELECT * FROM messages WHERE receiver_id = ? ORDER BY timestamp DESC";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $receiver_id);
$stmt->execute();
$result = $stmt->get_result();

while ($row = $result->fetch_assoc()) {
    echo "<div class='message'>";
    echo "<p><strong>From:</strong> " . $row['sender_id'] . "</p>";
    echo "<p><strong>Message:</strong> " . $row['message'] . "</p>";
    echo "<p><strong>Time:</strong> " . $row['timestamp'] . "</p>";
    echo "</div>";
}

$stmt->close();
$conn->close();
?>