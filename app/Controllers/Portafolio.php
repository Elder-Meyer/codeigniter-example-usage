<?php

namespace App\Controllers;

class Portafolio extends BaseController{
    public function index(){
        $proyectoModel = new \App\Models\ProyectoModel();
        return view('proyectos', ['proyectos' => $proyectoModel->getProyectos()]);
    }

    public function show($project){
        $proyectoModel = new \App\Models\ProyectoModel();
        $nombre = $proyectoModel->getProyecto($project);
        if(!$nombre){
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
        return view('proyecto_detalles', ['project' => $nombre]);
    }
}