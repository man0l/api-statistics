<?php

namespace App\Sources;

class PositiveGuys
{
    private string $title = 'Positive Guys';

    public function getData(): array
    {
        return [$this->title => 5000];
    }
}