<?php
/* header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: X-Requested-With"); */

$albums_data = file_get_contents('http://localhost/php-dischi-json/backend/database.json');

header('Content-Type: application/json');

echo ($albums_data);
?>
