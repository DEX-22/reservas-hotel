<?php


Class ControladorBanner{



			public static function ctrMostrarBanner(){
				$tabla = "banner";
				$respuesta = ModeloBanner::mdlMostrarBanner($tabla);
				return $respuesta;
				}

}


?>