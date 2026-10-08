<?php

namespace App\Controller\Login;

use App\Controller\AbstractController;

class LoginController extends AbstractController
{
    public function index(array $requestData): void
    {
        dump($requestData); exit();
    }
}