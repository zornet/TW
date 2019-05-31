<?php
$server = 'remotemysql.com';
$username = 'OaeOvHhSO3';
$password = '87TevTIbZC';
$database = 'OaeOvHhSO3';

try{
	$conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch(PDOException $e){
	die( "Connection failed: " . $e->getMessage());
}
