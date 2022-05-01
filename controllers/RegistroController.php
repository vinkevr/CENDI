<?php
namespace Controllers;
use MVC\Router;
use  Models\ActiveRecord;
use Models\Child;
class RegistroController{
    public static function registrar(Router $router){
     $errores = ActiveRecord::getErrores();
     $child = new Child;
     if($_SERVER['REQUEST_METHOD'] === 'POST'){
         if(empty($errores)){
              $child = new Child($_POST["child"]);
              $errores = $child->errores();
              
         }
     }
        $router->render('', [
            'errores'=>$errores
        ]);
    }
}