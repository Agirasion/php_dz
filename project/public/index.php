<?php

use app\services\Autoloader;

require "../services/Autoloader.php";

// для передачи функции объекта необходимо передать массив с созданием нового объекта и названием метода
spl_autoload_register([new Autoloader(), 'loadClass']);

$product1 = new \app\models\Product();

var_dump((new \app\services\DB())->getConnection());