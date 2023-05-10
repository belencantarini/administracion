<?php

class conexiondb {
    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $dbname = "belencantarini";

    public function __construct()
    {
        $this->conexion = mysqli_connect($this->host, $this->user, $this->password, $this->dbname) or exit ("No se pudo conectar a base de datos");
        
    }

    // public function getTablaDatos(){
    //     $consulta_db = mysqli_query($this->conexion, "SELECT * FROM tablaDatos");
    //     $retorno = [];
    //     $i = 0;
    //     while ($fila = mysqli_fetch_assoc($consulta_db)) {
    //         $retorno[$i] = $fila;
    //         $i++;
    //     }
    //     return $retorno;
    // }

    public function closeConexion(){
        mysqli_close($this->conexion);
    }
}
