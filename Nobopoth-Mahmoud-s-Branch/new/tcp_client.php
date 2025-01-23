<?php
include("db_connect.php");
$host = '127.0.0.1';
$port = 12345;
$sender_id = $_SESSION['user_id']; 
$receiver_id = $_SESSION['user_id']; 
$message = "Hello, Server!";

// Create a TCP Stream socket
$socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
if ($socket === false) {
    die("Unable to create socket: " . socket_strerror(socket_last_error()) . "\n");
}

// Connect to the server
if (socket_connect($socket, $host, $port) === false) {
    die("Unable to connect to server: " . socket_strerror(socket_last_error($socket)) . "\n");
}

// Prepare the message data
$data = json_encode([
    'sender_id' => $sender_id,
    'receiver_id' => $receiver_id,
    'message' => $message
]);

// Send the message to the server
socket_write($socket, $data, strlen($data));

// Read the response from the server
$response = socket_read($socket, 1024);
echo "Received response: $response\n";

// Close the socket
socket_close($socket);
?>