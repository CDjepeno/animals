<?php

namespace App\DataFixtures;

use App\Entity\Animal;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AnimalFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $a1 = new Animal();
        $a1->setName("chien")
           ->setDescription("Un animal domestique")
           ->setImage("chien.png");
        $manager->persist($a1);

        $a2 = new Animal();
        $a2->setName('cochon')
        ->setDescription("Un animal d'elevage")
           ->setImage("chien.png");
        $manager->persist($a2);

        $a3 = new Animal();
        $a3->setName('serpent')
        ->setDescription("Un animal dangereux")
           ->setImage("serpent.png");
        $manager->persist($a3);

        $a4 = new Animal();
        $a4->setName('crocodile')
        ->setDescription("Un animal très dangereux")
           ->setImage("croco.png");
        $manager->persist($a4);

        $a5 = new Animal();
        $a5->setName('requin')
        ->setDescription("Un animal marin très dangereux")
           ->setImage("requin.png");
        $manager->persist($a5);

        $manager->flush();
    }
}
