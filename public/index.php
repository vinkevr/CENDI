<?php
//Añadimos todas las fucniones, los autoload y la db
require_once '../includes/app.php';


//Registrar rutas

use MVC\Router;
use Controllers\LoginController;
use Controllers\UsuariosController;
$router = new Router();

//REGISTRO DE RUTAS get es pars que nos renderize cuando se ejecute la ruta y post para el envio de info

//Inicio y cierre de sesión
$router->get("/", [LoginController::class, 'login']);
$router->post("/", [LoginController::class, 'login']);
$router->get('/logout', [LoginController::class, 'logout']);
//RUTAS PROTEGIDAS
$router->get('/usuarios', []);

$router->get('/usuarios/crear', [UsuariosController::class, 'crear']);
$router->post('/usuario/crear', [UsuariosController::class, 'crear']);

$router->get('/usuarios/actualizar', []);
$router->post('/usuarios/actualizar', []);

$router->post('/usuarios/eliminar', []);


$router->comprobarRutas();