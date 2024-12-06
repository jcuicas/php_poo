<?php

namespace Clases;

class Auto
{
    public function __construct(
        private string $placa,
        private string $marca,
        private string $modelo,
        private int $anio,
    ) {}

    public function __toString(): string
    {
        return strtoupper($this->marca) . ' ' . strtoupper($this->modelo) . ' año ' . $this->anio . "\n";
    }

    public function getPlaca(): string
    {
        return 'Placa del vehiculo: ' . strtoupper($this->placa) . "\n";
    }
}
