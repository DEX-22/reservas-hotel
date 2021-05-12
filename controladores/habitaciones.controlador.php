<?php

    



class ControladorHabitaciones{

    public static function ctrMostrarHabitaciones(){
            
            $tabla = 'categorias';
            $categorias = ModeloHabitaciones::mdlMostrarHabitaciones($tabla);
            return $categorias;
    
        }
}


?>
