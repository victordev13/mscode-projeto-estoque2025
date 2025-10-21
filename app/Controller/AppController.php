<?php

namespace App\Controller;

class AppController extends AbstractController
{
    public function index(array $requestData): void
    {
        $this->render('index.php', [
            // passar dados para a view
        ]);
    }
}
