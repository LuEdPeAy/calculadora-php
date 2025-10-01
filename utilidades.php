<?php

namespace Utilidades;

trait VerificarNumeroPositivo{

    public function esMayorQueCero($numero): bool{
        return is_numeric($numero) && $numero > 0;
    }

    public function esCero($numero): bool{
        return is_numeric($numero) && $numero == 0;
    }
}

?>