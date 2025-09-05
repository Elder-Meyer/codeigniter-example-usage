<?php

namespace App\Controllers;

use App\Models\ProductosModel;

class Productos extends BaseController{
    public function index(){
        /*$db = \Config\Database::connect(); //conexión db

        $query = $db->query('SELECT codigo, nombre, stock FROM productos');
        $resultado = $query->getResult(); //para objetos y... $resultado = $query->getResultArray(); //para arrays*/

        // Forma alternativa de obtener los datos, llama al model en el controlador
        // y usa el método findAll() para obtener todos los registros de la tabla productos
        $productoModel = new ProductosModel();
        $resultado = $productoModel->findAll(); // devuelve un array de objetos por defecto

        $data = [ "titulo" => "Catalogo de productos", "productos" => $resultado ];
        return view('productos/index', $data);
    }

    public function show($id){
        $productoModel = new ProductosModel();
        $producto = $productoModel->find($id);
        $data = [
            'titulo' => 'Detalle del producto',
            'producto' => $producto
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