<?php
define('USER', 'udi');
define('PASSWORD', 'isl@2020');
define('HOST', '192.168.1.73');
define('DATABASE', 'servicio');

try{
	$connection = new PDO("mysql:host=".HOST.";dbname=".DATABASE, USER, PASSWORD, array(PDO::ATTR_PERSISTEN => true));
} catch(PDOException $exc){
	$connection = null;
	exit($exc -> getMessage());
}
?>
