<?php

namespace App\Controller\Error;

use App\Controller\AbstractController;

class ErrorController extends AbstractController
{
    public function index(array $requestData): void
    {
        $this->render('error.php', [
            'mensagem' => $requestData['mensagem'] ?? 'Erro interno do servidor'
        ]);
    }
}
