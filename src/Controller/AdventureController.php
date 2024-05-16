<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class AdventureController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        if ($this->isGranted('ROLE_TEACHER')){
            return $this->render('teacher/index.html.twig');
        }

        if ($this->isGranted('ROLE_EMPLOYEE')){
            return $this->render('employee/index.html.twig');
        }

        if ($this->isGranted('ROLE_STUDENT')){
            return $this->render('student/index.html.twig');
        }


        return $this->render('adventure/index.html.twig', [
            'controller_name' => 'AdventureController',
        ]);
    }
}
