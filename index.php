<?php
require_once __DIR__ . '/./config.php';
require_once __DIR__ . '/./app/controllers/NewsController.php';

$newsController = new NewsController();

if (isset($_GET['news'])) {
    $newsController->showNews($_GET['news']);
} else {
    $page = isset($_GET['page']) ? $_GET['page'] : 1;
    $newsController->news($page);
}