<?php 
	
	/**
	 * 
	 */
	class ModeloPlanes
	{
		
		public static function mdlMostrarPlanes($tabla)
		{
			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

			$stmt ->execute();

			return $stmt -> fetchAll();

			$stmt ->close();

			$stmt = null; 
		}
	}

?>