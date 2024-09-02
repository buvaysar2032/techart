<?php
require_once 'config/db.php';
require_once 'model/NewsModel.php';
require_once 'controller/NewsController.php';

$model = new NewsModel($pdo);
$controller = new NewsController($model);

$action = isset($_GET['action']) ? $_GET['action'] : 'index';
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;

if ($action === 'show' && isset($_GET['id'])) {
    $id = (int)$_GET['id'];
    $controller->show($id);
} else {
    $controller->index($page);
}
