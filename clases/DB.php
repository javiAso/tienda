<?php

namespace clases;

class DB {

    private $con;
    private $estado;

    public function __construct() {

        $this->con = $this->conectar();
    }

    private function conectar(): \PDO {

        $host = '172.17.0.2';
        $bd = 'dwes';
        $user = 'root';
        $pass = 'root';

        $dsn = "mysql:host=$host;dbname=$bd";
        $opciones = array(
            \PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
            \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
        );


        try {
            $con = new \PDO($dsn, $user, $pass, $opciones);

            $this->estado = "Conectado";
        } catch (PDOException $e) {

            die("No se ha podido conectar " . $e->getMessage());
            $this->estado = "<h2>No se ha podido conectar</h2>";
            $this->estado .= "<h3>Error número " . $e->getMessage() . "</h2>";
        }

        return $con;
    }

    function controlAcceso($user, $pass) {

        try {

            $sentencia = $this->con->prepare('Select * from usuarios where nombre=:name and pass=:password');
            $parametros = array(':name' => $user, ':password' => $pass);
            $sentencia->execute($parametros);
            //var_dump($sentencia);
            $f = $sentencia->fetch(\PDO::FETCH_ASSOC);
            // var_dump($f);
            if (!$f) {
                $mensaje = "Login incorrecto";
            } else
                $mensaje = "Login correcto";
        } catch (PDOException $exc) {
            $this->estado .= $exc;
        }
        return $mensaje;
    }

    public function obtieneProductos() {

        try {
            $sentencia = $this->con->prepare('Select * from producto');
            $sentencia->execute();
            $arrayProductos = [];
            while ($row = $sentencia->fetch(\PDO::FETCH_ASSOC)) {
                // var_dump($row);
                $producto = new Producto($row['cod'], $row['nombre'], $row['nombre_corto'], $row['descripcion'], $row['PVP'], $row['familia']);
                $arrayProductos[] = $producto;
            }
            return $arrayProductos;
        } catch (PDOException $exc) {
            $this->estado .= $exc;
        }
    }

    public function sacaProducto($cod) {

        try {
            $sentencia = $this->con->prepare('SELECT * FROM producto WHERE cod=:cod');
            $parametros = array(':cod' => $cod);
            $sentencia->execute($parametros);

            $row = $sentencia->fetch(\PDO::FETCH_ASSOC);

            $producto = new Producto($row['cod'], $row['nombre'], $row['nombre_corto'], $row['descripcion'], $row['PVP'], $row['familia']);

            return $producto;
        } catch (PDOException $exc) {
            $this->estado .= $exc;
        }
    }

    public function getDescripcion($cod) {

        try {
            $sentencia = $this->con->prepare('SELECT * FROM ordenador WHERE cod=:cod');
            $parametros = array(':cod' => $cod);
            $sentencia->execute($parametros);

            $row = $sentencia->fetch(\PDO::FETCH_ASSOC);
            $producto = $this->sacaProducto($cod);


            $ordenador = new Ordenador($producto->getCod(), $producto->getNombre(),
                    $producto->getNombre_corto(), $producto->getDescripcion(), $producto->getPvp(), $producto->getFamilia(),
                    $row['procesador'], $row['RAM'], $row['disco'], $row['grafica'], $row['unidadoptica'], $row['SO'], $row['otros']);

            return $ordenador;
        } catch (PDOException $exc) {
            $this->estado .= $exc;
        }
    }

    public function getCon() {

        return $this->estado;
    }

    public function cerrar() {
        $this->con = null;
    }

    public function __toString() {
        return $this->estado;
    }

}
