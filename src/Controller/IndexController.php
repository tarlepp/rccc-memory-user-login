<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;

class IndexController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(?UserInterface $user): Response
    {
        return $this->render('index/index.html.twig', [
            'controller_name' => 'IndexController',
            'user' => $user,
        ]);
    }
}
