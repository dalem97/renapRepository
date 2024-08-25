<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Departamentos;
class DepartamentosController extends Controller{

    public function cargarDepartamentos(){
        $departamento = new Departamentos();

        $resultado['resultado'] = $departamento->findAll();
        return view('view_departamentos',$resultado);
    }
}