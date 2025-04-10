<?php
session_start();

// Автоматичне завершення сесії
if (isset($_SESSION['last_activity']) && time() - $_SESSION['last_activity'] > 300) {
    session_unset();
    session_destroy();
    session_start();
}
$_SESSION['last_activity'] = time();

// Додавання товару
if (isset($_POST['product'])) {
    $_SESSION['cart'][] = $_POST['product'];

    // Зберігаємо в cookie "історію покупок"
    $previous = isset($_COOKIE['previous']) ? explode(',', $_COOKIE['previous']) : [];
    $previous[] = $_POST['product'];
    setcookie('previous', implode(',', $previous), time() + (30 * 24 * 60 * 60)); // 30 днів
    header("Location: index.php");
    exit;
}
?>

<h2>Корзина</h2>
<form method="post">
    <select name="product">
        <option value="Товар 1">Товар 1</option>
        <option value="Товар 2">Товар 2</option>
        <option value="Товар 3">Товар 3</option>
    </select>
    <button type="submit">Додати</button>
</form>

<h3>Поточна сесія (корзина):</h3>
<ul>
    <?php if (!empty($_SESSION['cart'])): ?>
        <?php foreach ($_SESSION['cart'] as $item): ?>
            <li><?= htmlspecialchars($item) ?></li>
        <?php endforeach; ?>
    <?php else: ?>
        <li>Корзина порожня</li>
    <?php endif; ?>
</ul>

<h3>Попередні покупки (cookie):</h3>
<ul>
    <?php
    if (isset($_COOKIE['previous'])) {
        foreach (explode(',', $_COOKIE['previous']) as $item) {
            echo "<li>" . htmlspecialchars($item) . "</li>";
        }
    } else {
        echo "<li>Немає попередніх покупок</li>";
    }
    ?>
</ul>
