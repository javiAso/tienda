<?php

namespace clases;

class Cesta {

    public $listadoProductos = [];
    public $cantidadProductos = [];
    public $precioTotal;

    public function anadeProducto($producto) {
        $cod = $producto->getCod();
        if (isset($this->listadoProductos["$cod"])) {
            $this->cantidadProductos["$cod"] += 1;
        } else {

            $this->listadoProductos["$cod"] = $producto;
            $this->cantidadProductos["$cod"] = 1;
        }
    }

    private function calculaTotal() {

        $total = 0;

        foreach ($this->listadoProductos as $prod) {
            $cod = $prod->getCod();
            $total += $prod->getPvp() * $this->cantidadProductos["$cod"];
        }

        $this->precioTotal = $total;
    }

    public function getPrecioTotal() {

        $this->calculaTotal();
        return $this->precioTotal;
    }

    public function getListadoProductos() {

        return $this->listadoProductos;
    }

    public function getCantidadProductos() {

        return $this->cantidadProductos;
    }

    public function quitarProducto($codProducto) {


        if ($this->cantidadProductos["$codProducto"] === 1) {
            unset($this->listadoProductos["$codProducto"]);
        } else {

            $this->cantidadProductos["$codProducto"]--;
        }
    }

    public function getTotalProductos() {

        $total = 0;

        foreach ($this->cantidadProductos as $prod) {
            $total += $prod;
        }

        return $total;
    }

}

?>