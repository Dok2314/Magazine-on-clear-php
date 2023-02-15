<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
ini_set('error_reporting', E_ALL);

include_once '../config/config.php';
include_once '../library/mainFunctions.php';

$controllerName = isset($_GET['controller']) ? ucfirst($_GET['controller']) : 'Index';
$actionName = isset($_GET['action']) ? $_GET['action'] : 'index';

loadPage($smarty, $controllerName, $actionName);
