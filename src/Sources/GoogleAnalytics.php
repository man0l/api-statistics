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
        $sql = /** @lang MySQL */
            <<<EOF

            SELECT SUM(visits) as visits
            FROM `sources`
            WHERE YEAR(created_at) = YEAR(NOW())
            AND MONTH(created_at) = MONTH(NOW())
            AND title = ?
            LIMIT 1
EOF;
        $stmt = $this->connection->prepare($sql);
        $stmt->execute([$this->title]);
        $number = $stmt->fetch(\PDO::FETCH_ASSOC);
        return [$this->title => $number['visits']];
    }
}