<?php

use App\Controllers\IndexController;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'IndexController::index');
$routes->get('verCiudadanos','CiudadanosController::cargarCiudadanos');
$routes->get('verDepartamentos','DepartamentosController::cargarDepartamentos');
$routes->get('verMunicipios','MunicipiosController::cargarMunicipios');
$routes->get('verNivelesacad','NivelesAcademicosController::cargarNiveles');
$routes->get('verRegiones','RegionesController::cargarRegiones');

$routes->get('registrarCiudadano','CiudadanosController::registrarCiudadano');

$routes->get('eliminarCiudadano/(:num)','CiudadanosController::eliminarCiudadanos/$1');
