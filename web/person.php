<?php
/**
 * Created by PhpStorm.
 * User: Monica Navas
 * Date: 14/08/2018
 * Time: 1:35 AM
 */

class person
{
      public  $inicio;
       public $rol;
        public  $unidad;
        public $nombre;
        public  $estado;
        public $contra;

    /**
     * person constructor.
     * @param $inicio
     */
    public function __construct()
    {
        if(isset($_SESSION['sesion']))
        {
            $this->inicio = $_SESSION['sesion'];
        }
    }

    /**
     * @return mixed
     */
    public function getInicio()
    {
        return $this->inicio;
    }

    /**
     * @param mixed $inicio
     */
    public function setInicio($inicio)
    {
        $this->inicio = $inicio;
    }

    /**
     * @return mixed
     */
    public function getRol()
    {
        return $this->rol;
    }

    /**
     * @param mixed $rol
     */
    public function setRol($rol)
    {
        $this->rol = $rol;
    }

    /**
     * @return mixed
     */
    public function getUnidad()
    {
        return $this->unidad;
    }

    /**
     * @param mixed $unidad
     */
    public function setUnidad($unidad)
    {
        $this->unidad = $unidad;
    }

    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param mixed $nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    /**
     * @return mixed
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * @param mixed $estado
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;
    }

    /**
     * @return mixed
     */
    public function getContra()
    {
        return $this->contra;
    }

    /**
     * @param mixed $contra
     */
    public function setContra($contra)
    {
        $this->contra = $contra;
    }



}