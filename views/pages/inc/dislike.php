<?php

require_once __DIR__ . "/../../../config/config.php";
require_once __DIR__ . "/../../../models/models.php";
require_once __DIR__ . "/../../../controllers";

$controllers = new controllers;


session_start();

if (!isset($_SESSION['dislike_count'])) {
    $_SESSION['dislike_count'] = 0;
}

$_SESSION['dislike_count']++;

echo $_SESSION['dislike_count'];
