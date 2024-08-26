<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Regiones;
class RegionesController extends Controller{

    public function cargarRegiones(){
        $region = new Regiones();

        $resultado['resultado'] = $region->findAll();
        return view('view_regiones',$resultado);
    }

    public function eliminarRegiones($cod_region=null){
        $region = new Regiones();
        $region->delete($cod_region);
        return view('view_regiones');
    }

}