<?php

namespace App\Sources;

class GoogleAnalytics
{
    private \PDO $connection;

    public function __construct(\PDO $connection)
    {
        $this->connection = $connection;
    }

    private string $title = 'Google Analytics';

    public function getData(): array
    {
        $this->connection->query('SELECT 1');
        $number = 150;
        return [$this->title => $number];
    }
}