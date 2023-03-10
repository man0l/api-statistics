<?php

namespace App\Sources;

class BadGuys implements SourceInterface
{
    private string $title = 'Bad Guys';

    public function getData(): array
    {
        return [$this->title => 777];
    }
}