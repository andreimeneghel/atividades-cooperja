<?php

require 'connection/conexao-bd.php';

$url = filter_input(INPUT_POST, 'url', FILTER_VALIDATE_URL);
if ($url === false) {
    header('Location: /?sucesso=0');
    exit();
}
$titulo = filter_input(INPUT_POST, 'titulo');
if ($titulo === false) {
    header('Location: /?sucesso=0');
    exit();
}

$repository = new \Alura\Repository\Video\VideoRepository($pdo);

if ($repository->add(new \Alura\Entity\Video($url,$titulo)) === false) {
    header('Location: /?sucesso=0');
} else {
    header('Location: /sucesso=1');
}

