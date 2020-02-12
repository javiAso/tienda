<?php

namespace clases;

class Producto {

    private $cod;
    private $nombre;
    private $nombre_corto;
    private $descripcion;
    private $pvp;
    private $familia;

    function __construct($cod, $nombre, $nombre_corto, $descripcion, $pvp, $familia) {

        $this->setCod($cod);
        $this->setNombre($nombre);
        $this->setNombre_corto($nombre_corto);
        $this->setDescripcion($descripcion);
        $this->setPvp($pvp);
        $this->setFamilia($familia);
    }

    function getCod() {
        return $this->cod;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getNombre_corto() {
        return $this->nombre_corto;
    }

    function getDescripcion() {
        return $this->descripcion;
    }

    function getPvp() {
        return $this->pvp;
    }

    function getFamilia() {
        return $this->familia;
    }

    function setCod($cod): void {
        $this->cod = $cod;
    }

    function setNombre($nombre): void {
        $this->nombre = $nombre;
    }

    function setNombre_corto($nombre_corto): void {
        $this->nombre_corto = $nombre_corto;
    }

    function setDescripcion($descripcion): void {
        $this->descripcion = $descripcion;
    }

    function setPvp($pvp): void {
        $this->pvp = $pvp;
    }

    function setFamilia($familia): void {
        $this->familia = $familia;
    }

}

?>