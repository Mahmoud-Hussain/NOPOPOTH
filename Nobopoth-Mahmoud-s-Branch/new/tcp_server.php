<?php
include("db_connect.php");
$host = '127.0.0.1';
$port = 12345;

// Create a TCP Stream socket
$socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
if ($socket === false) {
    die("Unable to create socket: " . socket_strerror(socket_last_error()) . "\n");
}

// Bind the socket to an address/port
if (socket_bind($socket, $host, $port) === false) {
    die("Unable to bind socket: " . socket_strerror(socket_last_error($socket)) . "\n");
}

// Start listening for connections
if (socket_listen($socket, 5) === false) {
    die("Unable to listen on socket: " . socket_strerror(socket_last_error($socket)) . "\n");
}

echo "Server started on $host:$port\n";

do {
    // Accept incoming connections
    $client = socket_accept($socket);
    if ($client === false) {
        echo "Unable to accept connection: " . socket_strerror(socket_last_error($socket)) . "\n";
        continue;
    }

    // Read the message from the client
    $input = socket_read($client, 1024);
    echo "Received message: $input\n";

    // Parse the input (assuming it's in JSON format)
    $data = json_decode($input, true);
    $sender_id = $data['sender_id'];
    $receiver_id = $data['receiver_id'];
    $message = $data['message'];

    // Insert the message into the database
    $stmt = $conn->prepare("INSERT INTO messages (sender_id, receiver_id, message) VALUES (?, ?, ?)");
    $stmt->bind_param("iis", $sender_id, $receiver_id, $message);
    $stmt->execute();

    // Send a response to the client
    $response = "Message received and stored";
    socket_write($client, $response, strlen($response));

    // Close the client socket
    socket_close($client);
} while (true);

// Close the server socket
socket_close($socket);
$conn->close();
?>