<?php
$cacheFile = __DIR__ . '/cache/report.html';
$cacheTime = 600;

if (file_exists($cacheFile) && (time() - filemtime($cacheFile) < $cacheTime)) {
    echo file_get_contents($cacheFile);
} else {
    ob_start();
    sleep(3);
    echo "<h2>HTML-звіт</h2>";
    echo "<table><tr><th>#</th><th>Ім’я</th><th>Сума</th><th>Дата</th></tr>";
    for ($i = 1; $i <= 1000; $i++) {
        echo "<tr><td>$i</td><td>Клієнт $i</td><td>" . rand(1000, 10000) . " грн</td><td>" . date('Y-m-d') . "</td></tr>";
    }
    echo "</table>";
    $report = ob_get_clean();
    file_put_contents($cacheFile, $report);
    echo $report;
}

