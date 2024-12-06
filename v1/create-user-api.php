<?php 

header('Access-Control-Allow-Origin: *');

header('Content-Type: application/json charset=UTF-8');

header("Access-Control-Allow-Methods: POST");


header("Access-Control-Allow-Headers:  Content-Type, Accept, Access-Control-Request-Method, Access-Control-Allow-Origin");

include_once('../config/database.php');
include_once('../classes/Users.php');


$db = new Database;

$connection = $db->connect();

$user_obj = new Users($connection);