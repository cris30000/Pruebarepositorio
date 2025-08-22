<?php
class Conexion {
    private $conexion;
    private array $datos;

    public function __construct(string $dsn)
     {
       $this->conexion = $dsn;
     }

    public function __destruct()
    {
        $this->conexion= null;
    }
    public function __set(string $nombre, $valor){
        $this->datos[$nombre] = $valor;
    }

    public function __get(string $nombre)
    {
        return $this->datos[$nombre] ?? null;
    }
}