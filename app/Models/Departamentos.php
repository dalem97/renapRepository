<?php 
namespace App\Models;

use CodeIgniter\Model;

class Departamentos extends Model{
    protected $table      = 'vw_deptos_regiones';
    // Uncomment below if you want add primary key
    //protected $primaryKey = 'cod_depto';
    protected $allowedFields=['cod_depto','nombre','cod_region'];
}