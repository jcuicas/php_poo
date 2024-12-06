<?php

use Clases\Auto;
use Clases\Docente;
use Clases\Empleado;
use Clases\Estudiante;
use Clases\Persona;
use Clases\Util;

spl_autoload_register(function($clase){
    //echo $clase . '.php' . "\n";
    require_once $clase . '.php';
});

$persona = new Persona('10.231.335', 'jose alejandro', 'cuicas santana', 56);
$vehiculo = new Auto('xyz-123', 'ford', 'fiesta', 2006);
$estudiante = new Estudiante('24.287.412', 'maria carolina', 'lopez fuentes', 22);
$docente = new Docente('11.007.528', 'carlos ernesto', 'flores davila', 38);
$empleado = new Empleado('9.197.357', 'luis david', 'gomez lanus', 41);

Util::encabezado('datos de persona',40);
echo $persona->__toString();
echo $persona->getEdad();
echo $persona->getCedula();

//Cambió de datos de persona (interface Fluent)
$persona->setCedula('14.231.335')
        ->setNombres('raul antonio')
        ->setApellidos('ascanio ramirez')
        ->setEdad(39);

Util::encabezado('cambiar datos persona',40);
echo $persona->__toString();
echo $persona->getEdad();
echo $persona->getCedula();

Util::encabezado('datos del vehiculo',40);
echo $vehiculo->__toString();
echo $vehiculo->getPlaca();

Util::encabezado('datos del estudiante',40);
echo $estudiante->__toString();
echo $estudiante->getEdad();
echo $estudiante->getCedula();
echo $estudiante->crearCarnet();

Util::encabezado('datos del docente',40);
echo $docente->__toString();
echo $docente->getEdad();
echo $docente->getCedula();
echo $docente->crearCarnet();

Util::encabezado('datos del empleado',40);
echo $empleado->__toString();
echo $empleado->getEdad();
echo $empleado->getCedula();
echo $empleado->crearCarnet();

Util::linea(40);