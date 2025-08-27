<?php

namespace App\Controllers;

class Productos extends BaseController{
    public function index(){
        echo "<h1>Controlador de productos</h1>";
        // print_r( $this->session );
    }

    public function show(){
        return "<h2>Detalles del producto</h2>";
    }
}