<?php

namespace ScreenMatch\Modelo;

use ScreenMatch\Exception\NotaInvalidaException;

trait ComAvaliacao{
    private array $notas;

    /**
     * @throws  Se a nota for negativa ou maior que 10
     */

    public function avalia(float $nota): void{
        if($nota < 0 || $nota > 0){
        throw new NotaInvalidaException();
        }
        $this->notas[] = $nota;
    }

    public function media(): float{
        $somaNotas = array_sum($this->notas);
        $quantidadeNotas = count($this->notas);

        return $somaNotas / $quantidadeNotas;
    }
}