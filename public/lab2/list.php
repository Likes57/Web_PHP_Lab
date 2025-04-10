<?php
$uploadDir = "uploads/";

if (is_dir($uploadDir)) {
    $files = array_diff(scandir($uploadDir), ['.', '..']);

    if (count($files) > 0) {
        echo "<h2>Список завантажених файлів:</h2><ul>";
        foreach ($files as $file) {
            $filePath = $uploadDir . $file;
            echo "<li><a href='$filePath' download>$file</a></li>";
        }
        echo "</ul>";
    } else {
        echo "<p>Файлів ще не завантажено.</p>";
    }
} else {
    echo "<p>Папка завантаження не існує.</p>";
}
?>
<br><a href="index.php">Повернутись</a>
