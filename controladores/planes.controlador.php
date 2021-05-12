<?php 

		/**
		 * 
		 */
		class ControladorPlanes
		{
			
			public static function ctrMostrarPlanes()
			{

					$tabla = "planes";
					$respuesta = ModeloPlanes::mdlMostrarPlanes($tabla);
					return $respuesta;


			}
		}


?>