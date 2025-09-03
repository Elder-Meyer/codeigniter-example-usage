<?php

namespace App\Controllers;

class Productos extends BaseController{
    public function index(){
        $db = \Config\Database::connect(); //conexión db

        $query = $db->query('SELECT codigo, nombre, stock FROM productos');
        $resultado = $query->getResult(); //para objetos
        //$resultado = $query->getResultArray(); //para arrays

        $data = [ "titulo" => "Catalogo de productos", "productos" => $resultado ];

        return view('productos/index', $data);
    }

    public function show($id){
        $data = [
            'titulo' => 'Detalle del producto',
            'id' => $id
        ];
        return view('productos/show', $data);
        // return view('plantilla/header', $data)
        //     .view('productos/show', $data)
        //     .view('plantilla/footer');
    }

    public function cat($categoria, $id){
        return "<h2>Categoria: $categoria con id: $id </h2>";
    }
}