<?php

namespace App\Controllers;

class Productos extends BaseController{
    public function index(){
        $data = [
                    "titulo" => "Catalogo de productos",
                    "productos" => [
                        ["id" => 11, "nombre" => "Apple MacBook Pro 17\"", "color" => "Silver", "categoria" => "Laptop", "precio" => "$2999"],
                        ["id" => 16, "nombre" => "Microsoft Surface Pro", "color" => "White", "categoria" => "Laptop PC", "precio" => "$1999"],
                        ["id" => 32, "nombre" => "Magic Mouse 2", "color" => "Black", "categoria" => "Accessories", "precio" => "$99"],
                        ["id" => 53, "nombre" => "Google Pixel Phone", "color" => "Gray", "categoria" => "Phone", "precio" => "$799"],
                        ["id" => 65, "nombre" => "Apple Watch 5", "color" => "Red", "categoria" => "Wearables", "precio" => "$999"],
                    ]
                ];
        return view('productos/index', $data);
        // return view('plantilla/header', $data).
        //         view('productos/index', $data).
        //         view('plantilla/footer');
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