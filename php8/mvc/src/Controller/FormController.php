<?php

namespace Alura\Controller;

use Alura\Repository\Video\VideoRepository;
use Alura\Entity\Video;

require '../connection/conexao-bd.php';

class FormController
{
    public function __construct(private VideoRepository $videoRepository)
    {
    }

    public function processaRequisicao(): void
    {
        $url = filter_input(INPUT_POST, 'url', FILTER_VALIDATE_URL);
        $titulo = filter_input(INPUT_POST, 'titulo');

        if ($url === false || $titulo === false) {
            header('Location: /?sucesso=0');
            exit();
        }

        // Adiciona o vídeo usando o repositório
        if ($this->videoRepository->add(new Video($url, $titulo)) === false) {
            header('Location: /?sucesso=0');
            exit();
        } else {
            header('Location: /?sucesso=1');
            exit();
        }

        // Obtém a lista de vídeos após redirecionamento
        $videoList = $this->videoRepository->all();


    }
}
