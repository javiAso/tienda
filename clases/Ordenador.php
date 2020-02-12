<?php

namespace clases;

class Ordenador extends Producto {

    private $procesador;
    private $RAM;
    private $disco;
    private $grafica;
    private $unidadOptica;
    private $SO;
    private $otros;

    function __construct($cod, $nombre, $nombre_corto, $descripcion, $pvp, $familia, $procesador, $RAM, $disco, $grafica, $unidadOptica, $SO, $otros) {
        parent::__construct($cod, $nombre, $nombre_corto, $descripcion, $pvp, $familia);
        $this->setProcesador($procesador);
        $this->setRAM($RAM);
        $this->setDisco($disco);
        $this->setGrafica($grafica);
        $this->setUnidadOptica($unidadOptica);
        $this->setSO($SO);
        $this->setOtros($otros);
    }

    function getProcesador() {
        return $this->procesador;
    }

    function getRAM() {
        return $this->RAM;
    }

    function getDisco() {
        return $this->disco;
    }

    function getGrafica() {
        return $this->grafica;
    }

    function getUnidadOptica() {
        return $this->unidadOptica;
    }

    function getSO() {
        return $this->SO;
    }

    function getOtros() {
        return $this->otros;
    }

    function setProcesador($procesador): void {
        $this->procesador = $procesador;
    }

    function setRAM($RAM): void {
        $this->RAM = $RAM;
    }

    function setDisco($disco): void {
        $this->disco = $disco;
    }

    function setGrafica($grafica): void {
        $this->grafica = $grafica;
    }

    function setUnidadOptica($unidadOptica): void {
        $this->unidadOptica = $unidadOptica;
    }

    function setSO($SO): void {
        $this->SO = $SO;
    }

    function setOtros($otros): void {
        $this->otros = $otros;
    }

}

?>