<?php
$db = json_decode(file_get_contents("db.json"), true);

$code = $_GET["c"] ?? "";

if (!$code || !isset($db[$code])) {
    echo "Код не найден";
    exit;
}

header("Location: " . $db[$code]);
exit;
