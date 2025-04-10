<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Форма вводу</title>
</head>
<body>
<h2>Введіть ваше ім'я та прізвище</h2>
<form action="process.php" method="post" >
    <label for="firstName">Ім'я:</label>
    <input type="text" name="firstName" id="firstName" required><br><br>

    <label for="lastName">Прізвище:</label>
    <input type="text" name="lastName" id="lastName" required><br><br>

    <input type="submit" value="Надіслати">
</form>
</body>
</html>
