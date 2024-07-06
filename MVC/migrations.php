<?php
require_once __DIR__.'/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->safeLoad();

use app\core\Application;
use app\Controllers\SiteController;
use app\Controllers\AuthController;

$config = [
    'db'=>[
        'dsn' =>$_ENV['DB_DSN'],
        'user'=>$_ENV['DB_USER'],
        'password'=> $_ENV['DB_PASSWORD'],
    ],
];

$app = new Application(__DIR__, $config);




$app->db->applyMigrations();    
?>