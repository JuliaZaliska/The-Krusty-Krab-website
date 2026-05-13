<?php

require __DIR__ . '/../vendor/autoload.php';

use App\Api\MenuController;

$controller = new MenuController();
$controller->index();