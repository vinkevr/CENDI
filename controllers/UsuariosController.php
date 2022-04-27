<?php
namespace Controllers;
use MVC\Router;
class UsuariosController {
    public static function crear(Router $router){
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            //Ira lo que se envie del formualario

        }

        $router->render('admin/crear', []);
    }
}