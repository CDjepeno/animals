<?php

namespace App\Controller;

use App\Entity\Personne;
use App\Repository\PersonneRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PersonneController extends AbstractController
{
    /**
     * Permet d'afficher les animaux appartenant à une personne
     * 
     * @Route("/personne/{id}", name="show_personne_animals")
     * 
     * @return Response
     */
    public function personneAnimals(Personne $personne): Response
    {
        return $this->render('personne/personne.html.twig', [
            'personne' => $personne
        ]);
    }

    /**
     * Permet d'afficher la liste des personnes
     *
     * @Route("/personne", name="personnes")
     * 
     * @param PersonneRepository $personne
     * @return Response
     */
    public function personneList(PersonneRepository $personne): Response
    {
        return $this->render('personne/personnes.html.twig', [
            'personnes' => $personne->findAll() 
        ]);
    }
}
