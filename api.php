<?php
require_once './model/ProductController.php';

$method = $_SERVER['REQUEST_METHOD'];
$data = array();

if ($method == 'POST' || $method == 'DELETE') {
    $data = json_decode(file_get_contents('php://input'), true);
}

$controller = new ProductController();
$controller->handleRequest($method, $data);