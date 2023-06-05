<?php

class ModeloRecorridoPueblo
	{
		
		public static function mdlMostrarRecorrido($tabla)
		{
			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

			$stmt ->execute();

			$data = $stmt -> fetchAll();

			$stmt ->close();

			$stmt = null; 

            return $data;
		}
	}

?>