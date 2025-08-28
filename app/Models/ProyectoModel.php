<?php

namespace App\Models;
use CodeIgniter\Model;


class ProyectoModel extends Model{
    public function getProyectos(){
        return [
            ['slug' => 'app-caih', 'nombre' => 'App CAIH'],
            ['slug' => 'corazon-huasteco', 'nombre' => 'Corazón Huasteco'],
            ['slug' => 'dulce-delicia', 'nombre' => 'Dulce Delicia']
        ];
    }

    public function getProyecto($slug){
        $proyectos = $this->getProyectos();
        foreach($proyectos as $proyecto){
            if($proyecto['slug'] === $slug){
                return $proyecto['nombre'];
            }
        }
        return null;
    }
}