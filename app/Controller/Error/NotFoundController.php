<?php

namespace App\Controller\Error;

use App\Controller\AbstractController;

class NotFoundController extends AbstractController
{
    public function index(array $requestData): void
    {
        $this->render('404.php', [
            'mensagem' => 'Página não encontrada'
        ]);
    }
}
