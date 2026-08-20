<?php

require_once __DIR__ . '/dbconnect.php';

try {
    $pdo = getDbConnection();
    $status = 'DB接続に成功しました。';
} catch (PDOException $e) {
    $status = 'DB接続エラー: ' . $e->getMessage();
}

?><!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>環境構築確認</title>
</head>
<body>
    <h1>PHP + MySQL 動作確認</h1>
    <p><?php echo htmlspecialchars($status, ENT_QUOTES, 'UTF-8'); ?></p>
</body>
</html>
