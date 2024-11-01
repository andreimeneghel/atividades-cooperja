<?php

namespace Alura\Entity;

class Video
{
    public readonly int $id; // Propriedade id
    public readonly string $url; // Propriedade url
    public readonly string $title; // Propriedade title

    public function __construct(
        string $url,
        string $title
    ) {
        $this->setUrl($url);
        $this->title = $title;
    }

    private function setUrl(string $url): void {
        if (filter_var($url, FILTER_VALIDATE_URL) === false) {
            throw new \InvalidArgumentException("Invalid URL");
        }

        $this->url = $url;
    }

    public function setId(int $id): void {
        $this->id = $id;
    }
}
