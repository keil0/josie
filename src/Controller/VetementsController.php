<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;



class VetementsController extends AbstractController
{
    public function index(): Response
    {
        return $this->render('vetements/index.html.twig');
    }


}
