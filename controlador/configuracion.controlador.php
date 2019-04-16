<?php

class ControladorConfiguracion
{
    static public function nombre_sitio(){
        $nombre = "Cucas Kain";
        return $nombre;
    }
    static public function boton_inicio(){
        $boton = '<button type="button" class="btn btn-warning btn-lg">Volver al inicio</button>';
        return $boton;
    }
}