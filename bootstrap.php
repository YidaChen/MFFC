<?php

use Illuminate\Database\Capsule\Manager as Capsule;

// 定義 BASE_PATH

define('BASE_PATH', __DIR__);

// Autoload 自動載入

require BASE_PATH.'/vendor/autoload.php';

// Eloquent ORM

$capsule = new Capsule;

$capsule->addConnection(require BASE_PATH.'/config/database.php');

$capsule->bootEloquent();

// whoops 錯誤提示

$whoops = new \Whoops\Run;

$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);

$whoops->register();