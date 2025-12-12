<?php
$dbFile = "db.json";

// читаем существующую базу
$db = json_decode(file_get_contents($dbFile), true);

// входные данные
$code = $_POST["code"] ?? "";
$url  = $_POST["url"] ?? "";

// проверки
if (!$code || !$url) {
    echo "error: empty fields";
    exit;
}

// добавить или обновить
$db[$code] = $url;

// сохранить обратно
file_put_contents($dbFile, json_encode($db, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

echo "ok";
