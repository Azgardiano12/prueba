<?php
class conexion{
    public $conexion;
    public function __construct(){
        $this->conexion = new mysqli("localhost","root","","sea_academic");
        if(!$this->conexion){
            echo "conexion fallida".$this->conexion->error;
        }
    }
}
?>