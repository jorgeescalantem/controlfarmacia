<?php 
$routes = require __DIR__ . '/routes/api.php';
$path = isset($_SERVER['PATH_INFO']) ? $_SERVER['PATH_INFO'] : '/';
$query = isset($_SERVER['QUERY_STRING']) ? $_SERVER['QUERY_STRING'] : null;
$httpMethod = $_SERVER['REQUEST_METHOD'];

if( isset( $routes[ $path ][ $httpMethod ] ) ){
  $requestController = explode(':', $routes[ $path ][ $httpMethod ]);
}else{
  $requestController = explode(':', $routes[ $path ]);
}

$params = ['post' => $_POST, 'get' => $_GET];

$controller = $requestController[0];
$method = $requestController[1];

require __DIR__ . '/Controllers\/'.$controller.'.php';

$controller = new $controller();

$data = $controller->$method($params);
echo json_encode( $data );