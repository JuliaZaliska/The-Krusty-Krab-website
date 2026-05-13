<?php

require __DIR__ . '/vendor/autoload.php';

use App\PageController;

$page = $_GET['page'] ?? 'home';

$controller = new PageController();
$controller->show($page);