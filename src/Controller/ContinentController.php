<?php

namespace App\Controller;

use App\Entity\Continent;
use App\Repository\ContinentRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ContinentController extends AbstractController
{
    /**
     * Permet d'afficher la liste des continents
     * 
     * @Route("/continent", name="continent")
     *
     * @param ContinentRepository $continent
     * @return Response
     */
    public function continent(ContinentRepository $continent): Response
    {
        return $this->render('continent/continents.html.twig', [
            'continents' => $continent->findAll()
        ]);
    }

    /**
     * Permet d'afficher les listes des animaux par continent
     * 
     * @Route("/continent/{id}", name="show_animals_continent")
     * 
     * @param Continent $continent
     * 
     * @return Response
     */
    public function index(Continent $continent): Response
    {
        return $this->render('continent/animals_continent.html.twig', [
            'continent' => $continent
        ]);
    }
}
