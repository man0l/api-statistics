<?php

namespace App\Sources;

class PositiveGuys implements SourceInterface
{
    private string $title = 'Positive Guys';

    public function getData(): array
    {
        $contents = file_get_contents('https://raw.githubusercontent.com/man0l/api-statistics/main/data/visits.json');
        $json = json_decode($contents, true);


        $result = array_filter($json, function ($item) {
            $now = new \DateTime();
            $date = new \DateTime($item['date']);

            return $date->format('Y-m') === $now->format('Y-m');
        });

        list($key) = array_keys($result);
        return [$this->title => $result[$key]['visits']];
    }
}