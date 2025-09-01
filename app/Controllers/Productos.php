<?php

namespace App\Controllers;

class Productos extends BaseController{
    public function index(){
        $data = ["titulo" => "Catalogo de productos",
                 "descripcion" => "Este es el catalgo de productos ¿que esperabas?"];
        return view('plantilla/header', $data).
                view('productos/index', $data).
                view('plantilla/footer');
    }

    public function show($id){
        $data = [
            'titulo' => 'Detalle del producto',
            'id' => $id
        ];
        return view('plantilla/header', $data)
            .view('productos/show', $data)
            .view('plantilla/footer');
    }

    public function cat($categoria, $id){
        return "<h2>Categoria: $categoria con id: $id </h2>";
    }
}