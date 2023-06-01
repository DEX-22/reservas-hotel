<?php



Class Conexion{

	public static function conectar(){

		$host="localhost";
		$db_name="reservas-hotel";
		$user="root";
		$password="password";
			
		$link = new PDO("mysql:host=$host;dbname=$db_name",$user,$password);
		$link->exec("set names utf8");
		return $link;

	}

}

