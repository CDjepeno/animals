<?php

namespace App\Controller;

use App\Repository\AnimalRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AnimalController extends AbstractController
{
    /**
     * @Route("/", name="animals")
     */
    public function index(AnimalRepository $animals): Response
    {
        return $this->render('animal/index.html.twig', [
            "animals" => $animals->findAll()
        ]);
    }

}
