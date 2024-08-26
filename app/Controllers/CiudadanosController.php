<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Ciudadanos;
class CiudadanosController extends Controller{

    public function cargarCiudadanos(){
        $ciudadano = new Ciudadanos();

        $resultado['resultado'] = $ciudadano->findAll();
        return view('view_ciudadanos',$resultado);
    }

    public function registrarCiudadano(){
        return view('');
    }

    public function eliminarCiudadanos($dpi=null){
        $ciudadano = new Ciudadanos();
        $ciudadano->delete($dpi);
        return view('view_ciudadanos');
    }
    

}