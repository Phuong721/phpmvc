<?php

$conn_file = 'controllers/connection.php';
if (file_exists($conn_file)) {
    require_once('controllers/connection.php');
    if (isset($_GET['controller'])) {
        $controller = $_GET['controller'];
        if (isset($_GET['action'])) {
            $action = $_GET['action'];
        } else {
            $action = 'index';
        }
    } else {
        $controller = 'posts';
        $action = 'index';
    }
    require_once('routes.php');
}

else{
    $controller = 'conn';
    $action = 'create';
    require_once('routes.php');
}

