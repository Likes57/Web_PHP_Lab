<?php
$showForm = true;
if (isset($_POST['name'])) {
    setcookie("username", $_POST['name'], time() + 7 * 24 * 60 * 60);
    header("Location: index.php");
    exit;
}

if (isset($_POST['delete_cookie'])) {
    setcookie("username", "", time() - 3600);
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="uk">
<head><meta charset="UTF-8"><title>Cookie</title></head>
<body>
<?php if (isset($_COOKIE['username'])): ?>
    <h2>Привіт, <?php echo htmlspecialchars($_COOKIE['username']); ?>!</h2>
    <form method="post">
        <button type="submit" name="delete_cookie">Видалити ім’я (cookie)</button>
    </form>
<?php else: ?>
    <form method="post">
        <label>Введіть ім’я: <input type="text" name="name" required></label>
        <button type="submit">Зберегти</button>
    </form>
<?php endif; ?>
</body>
</html>
