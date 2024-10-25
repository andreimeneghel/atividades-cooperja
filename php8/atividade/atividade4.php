<?php

    function opmat(int $valor1 ,int $valor2,string $valor3): int|string{
        switch($valor3){
            case "+":
                return ($valor1 + $valor2);
            case "-":
                return ($valor1 - $valor2);
            case "*":
                return ($valor1 * $valor2);
            case "/":
                return ($valor1 / $valor2);
            default:
                return "Operação inválida";
        }
    }

    echo opmat(50,5,"/")."\n";


    function calcularIMC(float $altura,float $peso){
    $imc = $peso / $altura ** 2;
    
    if ($imc < 18.5) {
        echo "Abaixo do peso\n";
    } elseif ($imc >= 18.5 && $imc < 25) {
        echo "Peso normal\n";
    } elseif ($imc >= 25 && $imc < 30) {
        echo "Excesso de peso\n";
    } else {
        echo "Obesidade";
    }
    }

    calcularIMC(1.73, 65);


    function conveterGraus(float $valor){
        echo ($valor * 1.8) + 32;
    }

    conveterGraus(5);
