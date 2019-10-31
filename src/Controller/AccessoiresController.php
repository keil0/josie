<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;


class AccessoiresController extends AbstractController
{

    public function index(): Response
    {
        return new Response($this->render('accessoires/index.html.twig'));
    }
}