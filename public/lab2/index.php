<!DOCTYPE html>
<html lang="uk">
<head>
  <meta charset="UTF-8">
  <title>Завантаження файлу</title>
</head>
<body>
<h2>Завантажити зображення</h2>
<form action="process.php" method="POST" enctype="multipart/form-data">
  <input type="file" name="uploaded_file" required>
  <input type="submit" value="Завантажити">
</form>

<h2>Запис тексту у файл</h2>
<form action="text.php" method="POST">
  <textarea name="text" rows="5" cols="30" placeholder="Введіть текст..." required></textarea><br>
  <input type="submit" value="Записати">
</form>

<h2>Переглянути список файлів</h2>
<a href="list.php">Переглянути всі завантажені файли</a>
</body>
</html>
