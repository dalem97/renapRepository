<?php 
namespace App\Models;

use CodeIgniter\Model;

class Regiones extends Model{
    protected $table      = 'regiones';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'cod_region';
    protected $allowFields=['cod_region','nombre','descripcion'];
}