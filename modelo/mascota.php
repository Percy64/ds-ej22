<?php

class mascota
{
    public $id;
    public $nombrem;
    public $raza;
    public $dueno ;

public  function mostrardatos()
    {

    echo 'datos mascota <br>';
    echo 'id:'. $this->id. '<br>';
    echo 'Nombre: '. $this->nombrem . '<br>';
    echo 'raza:'. $this->raza.'<br>';


    echo 'datos del dueño<br>';
    echo 'id'. $this->dueno->id. 'br';
    echo 'nombre:'.$this->dueno->nombre. '<br>';
    echo 'apellido:'. $this->dueno->apellido. '<br>' ;
    echo 'dni:'. $this->dueno->dni. '<br>';
    echo 'celular'. $this->dueno->celular. '<br>';
    echo 'direccion:'. $this->dueno->direccion. '<br>';





    }
}