<?php
namespace Models;
use Models\ActiveRecord;
class Derechohabiente extends ActiveRecord{
    protected static $tabla = '';
    protected static $columnasDb = [];
    public $appelidoP; 
    public $appelidoM;
    public $nombre;
    //Datos de su direccion
    public $calle;
    public $nExt;
    public $nInt;
    public $colonia;
    public $municipio;
    public $entidadFederativa;
    public $cp;
    public $telFijo;
    public $telCelular;
    public $correo;
    public $ocupacion;
    public $curp;
    public $puesto;
    public $sueldo;
    public $nEmpleado;
    public $adscripcion;
    public $horarioTrabajo;
    public $extension;
    
   
}