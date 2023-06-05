<?php
class ControladorRecorridoPueblo{
    public static function ctrRecorridoPueblo(){

        $tabla = "recorrido";
        $respuesta = ModeloRecorridoPueblo::mdlMostrarRecorrido($tabla);
        return $respuesta;

    }
}

?>