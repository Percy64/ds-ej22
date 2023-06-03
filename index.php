<?php

require_once 'modelo/dueno.php';
require_once 'modelo/mascota.php';

$d = new dueno();
$d->id=1;
$d->nombre='emanuel';
$d->apellido='merlo';
$d->dni=42557726;
$d->celular=3417208555;
$d->direccion='colon 2200';




$m=new mascota();
$m->id = 1;
$m->nombrem = 'terry';
$m->raza = 'pichicho';
$m->dueno=$d;
$m->mostrardatos();



