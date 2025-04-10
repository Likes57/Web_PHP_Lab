<?php
// дані з форми
$firstName = $_POST['firstName'] ?? '';
$lastName = $_POST['lastName'] ?? '';

// Перевірка на пусті значення
if (!empty($firstName) && !empty($lastName) && is_string($firstName) && is_string($lastName)) {
    echo "Привіт, " . htmlspecialchars($firstName) . " " . htmlspecialchars($lastName) . "!";
} else {
    echo "Будь ласка, введіть коректні ім'я та прізвище.";
}