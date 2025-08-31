<?php
require_once __DIR__ . '/config/database.php';
require_once __DIR__ . '/controllers/index.php';
require_once __DIR__ . '/models/index.php';
require_once __DIR__ . '/views/index.php';

use Controllers\IndexController;

$controller = new IndexController();
$controller->handleRequest();
?>