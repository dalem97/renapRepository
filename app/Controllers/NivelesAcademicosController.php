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

    public function eliminarNiveles($cod_nivelacad=null){
        $nivel = new NivelesAcademicos();
        $nivel->delete($cod_nivelacad);
        return view('view_nivelesacad');
    }

}