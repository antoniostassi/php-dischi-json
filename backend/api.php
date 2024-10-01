<?php

$albumsData = file_get_contents(__DIR__."\database.json");

header('Content-Type: application/json');

echo $albumsData;

