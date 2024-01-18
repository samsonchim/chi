<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $newMessage = [
        "name" => $name,
        "email" => $email,
        "message" => $message,
    ];

    $messages = [];

    // Read existing messages from the file
    $messagesData = file_get_contents('messages.json');

    if ($messagesData) {
        $messages = json_decode($messagesData, true);
    }

    // Add the new message to the array
    $messages[] = $newMessage;

    // Write the updated array back to the file
    file_put_contents('messages.json', json_encode($messages, JSON_PRETTY_PRINT));

    echo 'Message received successfully!';
} else {
    header("HTTP/1.0 405 Method Not Allowed");
    echo 'Method Not Allowed';
}
