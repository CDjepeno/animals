<?php

namespace App\Controller;

use App\Entity\Animal;
use App\Repository\AnimalRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AnimalController extends AbstractController
{
    /**
     * Permet d'afficher la page d'acceuil
     * 
     * @Route("/", name="home")
     * 
     * @return Response
     */
    public function index(AnimalRepository $animals): Response
    {
        return $this->render('animal/animals.html.twig', [
            "animals" => $animals->findAll()
        ]);
    }

    /**
     * Permet de récupérer un animal
     * 
     * @Route("/animal/{id}", name="show_animal")
     *
     * @param Animal $animals
     * 
     * @return Response
     */
    public function show(Animal $animal) 
    {
        return $this->render('animal/show.html.twig',[
            "animal" => $animal
        ]);

    }


}
