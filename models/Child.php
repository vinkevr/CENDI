<?php
namespace Models;
use Models\ActiveRecord;
class Child extends ActiveRecord{
    protected static $tabla = 'children';
    protected static $columnasDb = [];
    public $id;
    public $apellidoP;
    public $apellidoM;
    public $nombre;
    public $fNacimiento;
    public $edad;
    public $curp;

    public function __construct($args = [])
    {
        $this->id =$args['id'] ?? null;
        $this->apellidoP = $args[''] ?? '';
        $this->apellidoM = $args[''] ?? '';
        $this->nomnbre = $args[''] ?? '';
        $this->fNacimiento = $args[''] ?? '';
        $this->edad = $args[''] ?? '';
        $this->curp = $args[''] ?? '';
    }
    public function errores (){
        if(!$this->apellidoM || !$this->apellidoP){
            self::$errores = 'Ambos apellidos son necesarios';
        }
        if(!$this->nombre){
            self::$errores = 'El nombre es obligatorio';
        }
        if(!$this->edad){
            self::$errores = 'La edad es obligatoria';
        }
        if(!$this->edad){
            self::$errores = 'La fecha de nacimiento es necesaria';
        }
        if(!$this->curp){
            self::$errores = 'El CURP es obligatorio';
        }

        return self::$errores;
    }
}