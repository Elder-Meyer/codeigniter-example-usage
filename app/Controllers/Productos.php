<?php

namespace App\Controllers;

class Productos extends BaseController{
    public function index(){
        echo "<h1>Controlador de productos</h1>";
        // print_r( $this->session );
    }

    public function show($number){
        return "<h2>Detalles del producto $number </h2>";
    }

    public function cat($categoria, $id){
        return "<h2>Categoria: $categoria con id: $id </h2>";
    }
}