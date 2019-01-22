<?php
header("content-type:text/html;charset=utf-8");
ini_set("memory_limit", "10240M");
set_time_limit(0);
if(version_compare(PHP_VERSION,'5.3.0','<'))  die('PHP 版本必须大于等于5.3.0 !');
define('DIR_SECURE_CONTENT', 'powered by http://www.lswig.cn');

// 开启调试模式 建议开发阶段开启 部署阶段注释或者设为false
define('APP_DEBUG', true);
$_GET['param'] = $argv;
$_GET['m'] = "Home";
$_GET['c'] = "Spider";
$_GET['a'] = 'detail';
if(!APP_DEBUG){
    ini_set('display_errors', false);
}
define('APP_PATH','./Application/');
require dirname(__FILE__).'/ThinkPHP/ThinkPHP.php';