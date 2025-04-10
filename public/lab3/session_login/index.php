<?php
session_start();

if (isset($_POST['logout'])) {
    session_unset();
    session_destroy();
    header("Location: index.php");
    exit;
}

if (isset($_SESSION['user'])) {
    echo "<h2>Привіт, {$_SESSION['user']}!</h2>";
    echo '<form method="post"><button name="logout">Вийти</button></form>';
} else {
    ?>
    <form method="post">
        <label>Логін: <input type="text" name="login" required></label><br>
        <label>Пароль: <input type="password" name="password" required></label><br>
        <button type="submit">Увійти</button>
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if ($_POST['login'] === 'admin' && $_POST['password'] === '1234') {
            $_SESSION['user'] = $_POST['login'];
            header("Location: index.php");
            exit;
        } else {
            echo "<p style='color:red;'>Невірний логін або пароль</p>";
        }
    }
}
?>
