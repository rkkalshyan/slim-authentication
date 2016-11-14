<?php

require __DIR__ . '/../vendor/autoload.php';


session_start();

$app = new \Slim\App([
	'settings' => [
		'displayErrorDetails' => true,
	]
]);


$app->get('/', function($request, $response){
	return 'Home';
});

require __DIR__ . '/../app/routes.php';




?>