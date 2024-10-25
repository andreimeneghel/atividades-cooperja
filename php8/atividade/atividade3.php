<?php

$nome = "Andrei Meneghel";
$saldoatual = 1000;

echo "**********\n";
echo "Bem-vindo(a) ao Banco PHP\n";
echo "**********\n";
echo "Titular: $nome\n";
echo "Saldo atual: $saldoatual\n";
echo "**********\n";

while (true) {
    switch(menu()){
        case 1:
            consultarSaldo();
            break;
        case 2:
            sacar();
            break;
        case 3:
            depositar();
            break;
        case 4:
            echo "Obrigado por utilizar o Banco PHP\n";
            exit;
        default:
            echo "Opção inválida\n";
            break;
    }
}

function menu(){
    echo "1 - Consultar saldo atual\n";
    echo "2 - Sacar valor\n";
    echo "3 - Depositar valor\n";
    echo "4 - Sair\n";
    $numero = readline("Digite a opção desejada: ");
    return $numero;
}

function consultarSaldo(){
    global $saldoatual, $nome;
    echo "**********\n";
    echo "Titular: $nome\n";
    echo "Saldo atual: $saldoatual\n";
    echo "**********\n";
}

function sacar(){
    global $saldoatual;
    $valor = readline("Digite o valor que deseja sacar: ");
    if($valor > $saldoatual){
        echo "Saldo insuficiente\n";
    } else {
        $saldoatual -= $valor;
        echo "Saque realizado com sucesso\n";
        echo "Saldo atual: $saldoatual\n";
    }
}

function depositar(){
    global $saldoatual;
    $valor = readline("Digite o valor que deseja depositar: ");
    $saldoatual += $valor;
    echo "Depósito realizado com sucesso\n";
    echo "Saldo atual: $saldoatual\n";
}