<?php
$logFile = "log.txt";

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['text'])) {
    $text = trim($_POST['text']);
    file_put_contents($logFile, $text . PHP_EOL, FILE_APPEND);
    echo "<p>Текст успішно записано.</p>";
}

if (file_exists($logFile)) {
    echo "<h3>Вміст log.txt:</h3>";
    $lines = file($logFile);
    echo "<pre>" . htmlspecialchars(implode("", $lines)) . "</pre>";
} else {
    echo "<p>Файл log.txt ще не створений.</p>";
}
?>
<br><a href="index.php">Повернутись</a>
