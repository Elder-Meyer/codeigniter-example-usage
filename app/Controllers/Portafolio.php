<?php

namespace App\Controllers;

class Portafolio extends BaseController{
    public function index(){
        return view('proyectos');
    }

    public function show($project){
        return view('proyecto_detalles', ['project' => $project]);
    }
}