<?php
// 1. Вивід "Hello, World!"
echo "Hello, World!" . PHP_EOL . PHP_EOL; // Виводимо текст на екран

// 2. Змінні та типи даних
$stringVar = "Це рядок"; // Рядкова змінна
$intVar = 42; // Ціле число
$floatVar = 3.14; // Число з плаваючою комою
$boolVar = true; // Булеве значення

echo "Значення змінних:" . PHP_EOL;
echo $stringVar . PHP_EOL;
echo $intVar . PHP_EOL;
echo $floatVar . PHP_EOL;
echo $boolVar . PHP_EOL . PHP_EOL;

echo "Типи змінних:" . PHP_EOL;
var_dump($stringVar);
var_dump($intVar);
var_dump($floatVar);
var_dump($boolVar);
echo PHP_EOL;

// 3. Конкатенація рядків
$firstName = "Іван";
$lastName = "Петренко";
$fullName = $firstName . " " . $lastName; // Об'єднання рядків
echo "Повне ім'я: " . $fullName . PHP_EOL . PHP_EOL;

// 4. Умовні конструкції
$number = 7;
if ($number % 2 == 0) {
    echo "Число $number є парним." . PHP_EOL;
} else {
    echo "Число $number є непарним." . PHP_EOL;
}
echo PHP_EOL;

// 5. Цикли
echo "Цикл for (1 до 10):" . PHP_EOL;
for ($i = 1; $i <= 10; $i++) {
    echo $i . " ";
}
echo PHP_EOL . PHP_EOL;

echo "Цикл while (10 до 1):" . PHP_EOL;
$j = 10;
while ($j >= 1) {
    echo $j . " ";
    $j--;
}
echo PHP_EOL . PHP_EOL;

// 6. Масиви
$student = [
    "ім'я" => "Марія",
    "прізвище" => "Іваненко",
    "вік" => 20,
    "спеціальність" => "Інформатика"
];

echo "Інформація про студента:" . PHP_EOL;
foreach ($student as $key => $value) {
    echo "$key: $value" . PHP_EOL;
}

$student["середній_бал"] = 4.5;

echo PHP_EOL . "Оновлена інформація про студента:" . PHP_EOL;
foreach ($student as $key => $value) {
    echo "$key: $value" . PHP_EOL;
}
