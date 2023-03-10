<?php

namespace App;

use App\Sources\SourceInterface;

class App
{
    private array $sources;

    public function __construct(array $sources)
    {
        $this->sources = $sources;
    }

    public function run(): void
    {
        $this->applyHeaders();

        if (count($this->sources) === 0) {
            echo json_encode(value: [
                'error' => true,
                'message' => 'You should initiate at least a single source',
                'data' => [

                ]
            ]);

            return;
        }
        try {
            $output = [];
            /** @var SourceInterface $source */
            foreach ($this->sources as $source) {
                $output = array_merge($output, $source->getData());
            }
            echo json_encode(value: [
                'error' => false,
                'message' => "",
                'data' => $output
            ]);
        } catch (\Exception $e) {
            echo json_encode(value: [
                'error' => true,
                'message' => $e->getMessage(),
                'data' => [

                ]
            ]);
        }

    }

    public function applyHeaders()
    {
        header('Content-Type: application/json');
    }
}