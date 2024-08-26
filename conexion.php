<?php
	function conexion(){

	$host = "host=dpg-cr6g0756l47c73f3hf5g-a";
	$port = "port=5432";
	$dbname = "dbname=dbprueba_38s2";
	$user = "user=dbprueba_38s2_user";
	$password = "password=bjafkZRG5BuQSM2Is6bNYuCQUC8XyfYE";

	$db = pg_connect("$host $port $dbname $user $password");

	return $db;
}
?>
