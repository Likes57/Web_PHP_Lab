<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: index.php");
    exit();
}
?>

<h2>Вітаємо, <?php echo htmlspecialchars($_SESSION['user']); ?>!</h2>
<p>Це захищена сторінка.</p>
<a href="logout.php">Вийти</a>
