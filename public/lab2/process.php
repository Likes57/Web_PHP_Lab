<?php
$uploadDir = "uploads/";
if (!is_dir($uploadDir)) {
    mkdir($uploadDir, 0777, true);
}

if (isset($_FILES['uploaded_file'])) {
    $file = $_FILES['uploaded_file'];

    if (is_uploaded_file($file['tmp_name'])) {
        $allowedTypes = ['image/png', 'image/jpeg'];
        $maxSize = 2 * 1024 * 1024; // 2 MB

        $fileType = mime_content_type($file['tmp_name']);
        $fileSize = $file['size'];

        if (in_array($fileType, $allowedTypes) && $fileSize <= $maxSize) {
            $fileName = basename($file['name']);
            $targetPath = $uploadDir . $fileName;

            // Додати унікальний суфікс, якщо файл вже існує
            if (file_exists($targetPath)) {
                $fileInfo = pathinfo($fileName);
                $uniqueName = $fileInfo['filename'] . '_' . time() . '.' . $fileInfo['extension'];
                $targetPath = $uploadDir . $uniqueName;
                $fileName = $uniqueName;
            }

            if (move_uploaded_file($file['tmp_name'], $targetPath)) {
                echo "<p>Файл успішно завантажено!</p>";
                echo "<p>Ім'я файлу: $fileName</p>";
                echo "<p>Тип: $fileType</p>";
                echo "<p>Розмір: " . round($fileSize / 1024, 2) . " KB</p>";
                echo "<p><a href='$targetPath' download>Завантажити файл</a></p>";
            } else {
                echo "<p>Помилка при збереженні файлу.</p>";
            }
        } else {
            echo "<p>Файл має бути зображенням (PNG, JPG) та розміром до 2 МБ.</p>";
        }
    } else {
        echo "<p>Файл не було завантажено коректно.</p>";
    }
} else {
    echo "<p>Файл не обрано.</p>";
}
?>
<br><a href="index.php">Повернутись</a>
