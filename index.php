<?php 
define('APP_HOST',$_SERVER['HTTP_HOST']);
$controller = isset($_GET['c'])?ucfirst($_GET['c']):'Index';
$action = isset($_GET['a'])?$_GET['a']:'index';
$config = include ('./config.php');
include ('./Common/function.php');
include ('./Controllers/Controller.php');
// include ('./Controllers/'.$controller.'.php');
include ('./Model/DB.php');
$controller = 'Controllers\Admin\\'.$controller;
$obj = new $controller();
$obj->$action();