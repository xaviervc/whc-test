<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once '../vendor/autoload.php';
require_once 'AppService.php';

if($_SERVER['REQUEST_METHOD'] === 'POST')
{
    $data = $_POST['data'] ?? '';

    if($data === '')
        echo json_encode(['errors' => ['Input required.']]);
    
    $service = new AppService();
    
    $method = $service->getMethod($data);

    $args = $service->getArgs($data);

    $result = $service->doMethod($method, $args);

    echo json_encode($result);

    die();
}