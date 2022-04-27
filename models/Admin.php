<?php

namespace Models;

use Models\ActiveRecord;

class Admin extends ActiveRecord
{

    protected static $tabla = 'usuarios';
    protected static $columnasDb = ['id', 'correo', 'password'];
    public $id;
    public $correo;
    public $contra;

    public function __construct($args=[])
    {
        $this->id = $args['id'] ?? '';
        $this->correo= $args['correo'] ?? '';
        $this->contra= $args['contra'] ?? '';
    }

    //Checar que el ususario se encuentre en la bd
    public function existeUsuario(){
    $query = 'SELECT * FROM ' . self::$tabla . " WHERE correo = '" . $this->correo . "'";
    $consulta = self::$db->query($query);
    //>num_rows para ver si nos trajo algo la db
    if(!$consulta->num_rows){
        self::$errores[] = 'El usuario no existe';
        //no regresamos nada
        return;
    }
    return $consulta;
    }
    public function comprobarPassword($resultado){
        //Traemos lo de la BD como un objeto
      $usuario =  $resultado->fetch_object();

      $autenticado = password_verify($this->contra, $usuario->password);

      if(!$autenticado){
          self::$errores[] = 'Contraseña incorrecta';
      }
      return $autenticado;
    }
    public function autenticar(){
    //Iniciamos la sesión
    session_start();
    
    //LLenar el arreglo de sesión
    $_SESSION['usuario'] = $this->correo;
    $_SESSION['login'] = true;
    
    header('Location: /usuarios');
    
    }
    public function errores (){
         if($this->correo === '' || $this->contra === ''){
            self::$errores[]='Todos los campos son obligatorios';
         }
    }
}
