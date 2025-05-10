<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Lab 6</title>
    <link rel="stylesheet" href="cached-style.php">
</head>
<body>

<button onclick="loadSessionCache()">Дані з сесійного кешу</button>
<div id="session-result"></div>

<button onclick="loadFileCache()">Звіт із файлового кешу</button>
<div id="file-result"></div>

<script>
    function loadSessionCache() {
        document.getElementById('session-result').innerHTML = 'Завантаження...';
        fetch('session-cache.php')
            .then(res => res.text())
            .then(html => {
                document.getElementById('session-result').innerHTML = html;
            });
    }

    function loadFileCache() {
        document.getElementById('file-result').innerHTML = 'Генеруємо або завантажуємо звіт...';
        fetch('generate-report.php')
            .then(res => res.text())
            .then(html => {
                document.getElementById('file-result').innerHTML = html;
            });
    }
</script>
</body>
</html>
