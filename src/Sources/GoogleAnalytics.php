<?php

namespace App\Sources;

class GoogleAnalytics
{
    private string $title = 'Google Analytics';
    public function getData(): array
    {
        $number = 150;
        return  [$this->title => $number];
    }
}