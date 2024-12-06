<?php

namespace Clases;

class Persona
{
    public function __construct(
        private string $cedula,
        private string $nombres,
        private string $apellidos,
        private int $edad
    ) {}

    public function __toString(): string
    {
        return strtoupper($this->nombres) . ' ' . strtoupper($this->apellidos) . "\n";
    }

    public function getEdad(): string
    {
        return 'Tiene una edad de ' . $this->edad . ' años' . "\n";
    }

    public function getCedula(): string
    {
        return 'Cédula: ' . $this->cedula . "\n";
    }

    public function setEdad(int $edad): self
    {
        $this->edad = $edad;
        return $this;
    }

    public function setCedula(string $cedula): self
    {
        $this->cedula = $cedula;
        return $this;
    }

    public function setNombres(string $nombres): self
    {
        $this->nombres = $nombres;
        return $this;
    }

    public function setApellidos(string $apellidos): self
    {
        $this->apellidos = $apellidos;
        return $this;
    }
}

interface iGenerarCarnet
{
    public function crearCarnet(): string;
}

class Estudiante extends Persona implements iGenerarCarnet
{
    public function crearCarnet(): string
    {
        return 'Carnet de color Rojo Estudiante' . "\n";
    }
}

class Docente extends Persona implements iGenerarCarnet
{
    public function crearCarnet(): string
    {
        return 'Carnet de color Verde Docente' . "\n";
    }
}

class Empleado extends Persona implements iGenerarCarnet
{
    public function crearCarnet(): string
    {
        return 'Carnet de color Azul Empleado' . "\n";
    }
}
