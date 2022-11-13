<?php
session_start();
header("Access-Control-Allow-Origin: *");
date_default_timezone_set("Asia/Bangkok");

define( 'DB_NAME', 'rmis_2021' );
define( 'DB_USER', 'rmis2021' );
define( 'DB_PASSWORD', 'yyUi43#2cc' );
define( 'DB_HOST', 'wisnior.com' );
define( 'DB_PORT', '8889' );
define( 'TB_PREFIX', '' );
define( 'ROOT_DOMAIN', 'http://localhost/rmis2023/' );

// Define system parameters
$sysdate = date('Y-m-d');
$sysdatetime = date('Y-m-d H:i:s');
$sysdateu = date('U');
$sysdateyear = date('Y');
$ip = $_SERVER['REMOTE_ADDR'];

?>
