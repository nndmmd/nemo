<?php
use Illuminate\Database\Capsule\Manager as Capsule;

// BASE_PATH
define('BASE_PATH', __DIR__);

// VIEW_BASE_PATH
define('VIEW_BASE_PATH', BASE_PATH.'/app/views/');

// BASE_URL
$config = require BASE_PATH.'/config/config.php';
define('BASE_URL', $config['base_url']);

// TIME_ZONE
date_default_timezone_set($config['time_zone']);

// Autoload
require BASE_PATH.'/vendor/autoload.php';

// Eloquent ORM
$capsule = new Capsule;
$capsule->addConnection(require BASE_PATH.'/config/database.php');
$capsule->setAsGlobal(); // 设置全局静态可访问后续方可使用Capsule::xxxxx
$capsule->bootEloquent();

// whoops: php errors for cool kids
$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

// Doorman
$doorman = new \Nndmmd\Doorman\Doorman;
$doorman->setRoles(require BASE_PATH.'/config/roles.cfg.php');
$doorman->setPermissions(require BASE_PATH.'/config/permissions.cfg.php');

if(!$doorman->can(['admin'],parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH),$roles)) {
    echo '拒绝访问<br/>';
    var_dump($roles);
    exit();
}

