<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Реєстрація та вхід</title>
</head>
<body>
<h2>Реєстрація</h2>
<form action="register.php" method="POST">
    <input type="text" name="username" placeholder="Ім'я користувача" required><br>
    <input type="email" name="email" placeholder="Електронна пошта" required><br>
    <input type="password" name="password" placeholder="Пароль" required><br>
    <button type="submit">Зареєструватися</button>
</form>

<h2>Вхід</h2>
<form action="login.php" method="POST">
    <input type="text" name="username" placeholder="Ім'я користувача" required><br>
    <input type="password" name="password" placeholder="Пароль" required><br>
    <button type="submit">Увійти</button>
</form>
</body>
</html>
