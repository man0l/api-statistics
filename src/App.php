<?php

namespace App;

class App
{

    public function run(): void
    {
        try {
            echo json_encode(value: [
                'error' => false,
                'message' => "",
                'data' => [
                    "Google Analytics" => 150,
                    "Positive Guys" => 5000
                ],
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
}