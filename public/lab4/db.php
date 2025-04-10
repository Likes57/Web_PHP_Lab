<?php
$host = 'mysql';
$db = 'started';
$user = 'started-user';
$pass = 'started-password';

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Помилка підключення: " . $conn->connect_error);
}

