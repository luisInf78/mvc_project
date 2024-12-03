<?php
require_once './controllers/UserController.php';

$action = $_GET['action'] ?? 'index';
$controller = new UserController();

if ($action == 'create') {
    $controller->create();
} else {
    $controller->index();
}
