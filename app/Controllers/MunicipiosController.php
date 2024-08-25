<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Municipios;
class MunicipiosController extends Controller{

    public function cargarMunicipios(){
        $municipio = new Municipios();

        $resultado['resultado'] = $municipio->findAll();
        return view('view_municipios',$resultado);
    }

}