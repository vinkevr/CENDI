<?php

namespace Models;

class ActiveRecord
{
    protected static $db;
    protected static $columnasDb = [];

    //Tabla de la db para saber vual se ejecuta y sea mas dinamico
    protected static $tabla = '';
    //Guardar errores en los formularios (campos vacios)
    protected static $errores = [];

    //Iniciar la base de datos
    public static function setDb($database)
    {

        //Con self hago referencia a un atributo estatico de la clase
        self::$db = $database;
    }
    //pasar todo a string para evitar inyecciones
    public function sanitizar()
    {
        $atributos = [];
        $saanitizados = [];
        //Recorremos las columnas de la BD para mapear los datos
        foreach (static::$columnasDb as $columna) {
            //El id no se actualiza
            if ($columna === 'id') continue;
            $atributos[] = $this->$columna;
        }
        foreach ($atributos as $key => $value) {
            $sanitizados[$key] = self::$db->escape_string($value);
        }
        return $sanitizados;
    }

    //Traer todo de la db
    public static function all()
    {
        $query = 'SELECT * FROM ' . static::$tabla;
        $resultado = self::consultaSQL($query);
        return $resultado;
    }

    //Actualizar un registro
    public function update()
    {
        $atributos = $this->sanitizar();
        //Unit la BD con los nuevos valores
        $valores = [];
        //Hacer mas dinamico el actualizado
        foreach ($atributos as $key => $value) {
            $valores[] = "{$key} = '{$value}'";
        }
        //Unimos todo los guardado en el arreglo como un string
        $query = 'UPDATE ' . static::$tabla . ' SET ' . join(', ', $valores);
        //concatenamos
        $query .= "WHERE id = '" . self::$db->escape_string($this->id) . "' ";
        $resultado = self::$db->query($query);
        return $resultado;
    }

    //Eliminar un registro
    public  function delete()
    {
        $id = $this->id;
        $query = 'DELETE FROM' . ' ' . static::$tabla . " WHERE id = " . self::$db->escape_string($id);
        $resultado = self::$db->query($query);
        return $resultado;
    }

    //Mandar los querys
    public static function consultaSQL($consulta)
    {
        $resultado = self::$db->query($consulta);

        //Guardar lo traido de la bd pero ya transformado en objetos
        $array = [];

        //Iterar lo traído desde la BD
        //Se ejecuta hasat el ultimo registro
        while ($registro = $resultado->fetch_assoc()) {
            //Creamos el objeto y lo guardamos
            $array[] = static::crearObjeto($registro);
        }
    }
    public static function crearObjeto($registro)
    {

        //Creamos un objeto de la clase que onvoca, por eso static
        $objeto = new static;
        //Verificamos que la clase tenga esa propiedad para darle el valor al atributo
        foreach ($registro as $key => $value) {
            if (property_exists($objeto, $key)) {
                $objeto->$key = $value;
            }
            return $objeto;
        }
    }
    //validacion de que no haya errores
    public static function getErrores()
    {
        return static::$errores;
    }
    public static function LimpiarErrores()
    {
        static::$errores = [];
        return static::$errores;
    }
}
