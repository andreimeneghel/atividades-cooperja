<?php




    // $notas = [8.5, 9.2, 7.8, 9.0, 8.8];
    // rsort($notas); // Ordena de forma decrescente (r de reverso)
        
    // echo "As três maiores notas são: $notas[0], $notas[1] e $notas[2]";


$nomes = "Vinicius Dias, 1997, Programador";


function ordenarStrings(array $array): array
{
    sort($array);
    return $array;
}

// Exemplo de uso:
$array = array("banana", "abacaxi", "laranja", "uva");
$arrayOrdenado = ordenarStrings($array);
echo "Array ordenado: ";
print_r($arrayOrdenado);

?>
