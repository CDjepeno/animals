<?php

namespace App\Controller;

use App\Entity\Familly;
use App\Repository\FamillyRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FamillyController extends AbstractController
{
    /**
     * Permet d'afficher la liste des familles
     * 
     * @Route("/familly", name="familly")
     * 
     * @return Response
     */
    public function index(FamillyRepository $familly): Response
    {
        return $this->render('familly/index.html.twig', [
            'famillies' => $familly->findAll()
        ]);
    }

    /**
     * Permet d'afficher la liste d'animaux par famille
     * 
     * @Route("/famille/{id}", name="show_animals_familly")
     *
     * @return Response
     */
    public function familly(Familly $familly) 
    {
        return $this->render('familly/show.html.twig',[
            'familly' => $familly
        ]);
    }
}
