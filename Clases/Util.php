<?php

namespace Clases;

class Util
{
    public static function linea(int $largo): void
    {
        echo str_repeat('═',$largo) . "\n";
    }

    public static function encabezado(string $titulo, int $largo): void
    {
        self::linea($largo);
        echo "\t" . strtoupper($titulo) . "\n";
        self::linea($largo);
    }
}