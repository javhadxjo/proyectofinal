<?php

function conectarBD(){
	$host="host=
ec2-54-225-110-156.compute-1.amazonaws.com";
	$port="port=5432";
	$name="dbname=d1ljg7bt9lemgu";
	$user="user=tftzfmvpojyrai";
	$password="password=7eeae106841be7e5d61ce570992cc5ee0dfc084137bb6a43104222b7ff5f0f53";
	$db = pg_connect("$host $port $name $user $password");

	if(!$db){
		
		echo "error ".pg_last_error;
	}else{
		
		//echo "conexion exitosa";
		return $db;
	}

}
	
?>
