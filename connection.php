<?php 

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE");
header('Content-type: application/x-www-form-urlencoded');
header('Content-type: application/json');

date_default_timezone_set("Asia/Bangkok");



// If you installed via composer, just use this code to require autoloader on the top of your projects.
// require 'vendor/autoload.php';
require("Medoo.php");
 
// Using Medoo namespace
use Medoo\Medoo;
 
error_reporting(E_ERROR | E_PARSE);

$db = new Medoo([
	// required
	'database_type' => 'mysql',
	'database_name' => 'bhms',
	'server' => 'localhost',
	'port'=>3306,
	'username' => 'root',
	'password' => '12345678',
]);

?>