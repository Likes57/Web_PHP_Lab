<?php
global $conn;
require 'db.php';

$username = $_POST['username'];
$email = $_POST['email'];
$password = md5($_POST['password']); // хешування md5

$stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $username, $email, $password);

if ($stmt->execute()) {
    echo "Реєстрація успішна! <a href='index.php'>Увійти</a>";
} else {
    echo "Помилка: " . $stmt->error;
}

$stmt->close();
$conn->close();

