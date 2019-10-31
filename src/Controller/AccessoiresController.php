<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AccessoiresController extends AbstractController
{
    /**
     * @Route("/accessoires", name="accessoires")
     */
    public function index()
    {
        return $this->render('accessoires/index.html.twig', [
            'controller_name' => 'AccessoiresController',
        ]);
    }
}
