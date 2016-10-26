<?php

$database = "data.json";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

	$data = json_decode(file_get_contents("php://input"));
	file_put_contents($database, json_encode($data));
	echo "Done";

} else if($_SERVER["REQUEST_METHOD"] == "GET") {

	echo file_get_contents($database);
	
}