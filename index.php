<?php

// change the following paths if necessary
$yii=dirname(__FILE__).'/protected/framework/yii.php';
$config=dirname(__FILE__).'/protected/config/main.php';

if( isset( $_SERVER['CRASHFIX_WEBAPP_DEBUG'] ) )
{
    // remove the following lines when in production mode
    defined('YII_DEBUG') or define('YII_DEBUG',true);
    
    // specify how many levels of call stack should be shown in each log message
    defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);    
}

// respect X-Real-IP header from reverse proxy
if(isset($_SERVER['HTTP_X_REAL_IP']))
{
    $_SERVER['REMOTE_ADDR'] = $_SERVER['HTTP_X_REAL_IP'];
} 

require_once($yii);
Yii::createWebApplication($config)->run();
