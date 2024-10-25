<?php 

// Nome do aluno
$nome = "Andrei";
// Notas do aluno
$nota = (2+3+5)/3;
// Converter metros para centimetros
$metros = 2;
$centimetros = $metros * 100;

echo "Nome do aluno: $nome\n". number_format($nota,2) . "\n" . number_format($centimetros,2);

$ano = 2024;
if (($ano % 4 == 0 && $ano % 100 != 0) || $ano % 400 == 0) {
    echo "$ano é bissexto.";
} else {
    echo "$ano não é bissexto.";
}

