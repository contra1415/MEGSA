<?php ob_start();

$db['db_host'] = "localhost";
$db['db_user'] = "contra1415";
$db['db_pass'] = "16929690";
$db['db_name'] = "megsa";

foreach($db as $key => $value){
define(strtoupper($key), $value);
}
$connection = mysqli_connect(DB_HOST, DB_USER,DB_PASS,DB_NAME);
$query = "SET NAMES utf8";
mysqli_query($connection,$query);

?>