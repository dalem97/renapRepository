<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\NivelesAcademicos;
class NivelesAcademicosController extends Controller{

    public function cargarNiveles(){

        $nivelAcad = new NivelesAcademicos();

        $resultado['resultado'] = $nivelAcad->findAll();
        return view('view_nivelesacad',$resultado);

    }

}