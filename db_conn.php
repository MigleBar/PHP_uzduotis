<?php


define("DB_SERVER", "localhost");
define("DB_NAME", "bootcamp");
define("DB_USER", "root");
define("DB_PASS", "");

$db = new mysqli(DB_SERVER, DB_USER, DB_PASS, DB_NAME);

if($db->connect_error){
	echo $db->connect_error;
	exit;
}else{
	echo "<h4>Prisijungta prie duomenu bazes</h4>";
}

































