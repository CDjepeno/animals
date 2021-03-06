<?php

namespace App\DataFixtures;

use App\Entity\Animal;
use App\Entity\Familly;
use App\Entity\Personne;
use App\Entity\Continent;
use App\Entity\Dispose;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AnimalFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {

      $p1 = new Personne();
      $p1->setName('Milo');
      $manager->persist($p1);

      $p2 = new Personne();
      $p2->setName('Tya');
      $manager->persist($p2);

      $p3 = new Personne();
      $p3->setName('Lili');
      $manager->persist($p3);

      $c1 = new Continent();
      $c1->setName("europe");
      $manager->persist($c1);

      $c2 = new Continent();
      $c2->setName("asie");
      $manager->persist($c2);

      $c3 = new Continent();
      $c3->setName("afrique");
      $manager->persist($c3);

      $c4 = new Continent();
      $c4->setName("océanie");
      $manager->persist($c4);

      $c5 = new Continent();
      $c5->setName("amérique");
      $manager->persist($c5);

      $f1 = new Familly();
      $f1->setName("mamifères")
         ->setDescription("Animaux vertébrés nourrisant leurs petits avec du lait");
      $manager->persist($f1);

      $f2 = new Familly();
      $f2->setName("reptiles")
         ->setDescription("Animaux vertébrés qui rampent");
      $manager->persist($f2);

      $f3 = new Familly();
      $f3->setName("fish")
         ->setDescription("Animaux invertébrés du monde aquatique");
      $manager->persist($f3);

      $a1 = new Animal();
      $a1->setName("chien")
         ->setDescription("Un animal domestique")
         ->setImage("chien.png")
         ->setWeight(10)
         ->setDangerous(false)
         ->setFamilly($f1)
         ->addContinent($c1)
         ->addContinent($c2)
         ->addContinent($c3)
         ->addContinent($c4)
         ->addContinent($c5);
      $manager->persist($a1);

      $a2 = new Animal();
      $a2->setName('cochon')
      ->setDescription("Un animal d'elevage")
         ->setImage("chien.png")
         ->setWeight(300)
         ->setDangerous(false)
         ->setFamilly($f1)
         ->addContinent($c1)
         ->addContinent($c5);
      $manager->persist($a2);

      $a3 = new Animal();
      $a3->setName('serpent')
      ->setDescription("Un animal dangereux")
         ->setImage("serpent.png")
         ->setWeight(5)
         ->setDangerous(true)
         ->setFamilly($f2)
         ->addContinent($c2)
         ->addContinent($c3)
         ->addContinent($c4);
      $manager->persist($a3);

      $a4 = new Animal();
      $a4->setName('croco')
      ->setDescription("Un animal très dangereux")
         ->setImage("croco.png")
         ->setWeight(500)
         ->setDangerous(true)
         ->setFamilly($f2)
         ->addContinent($c3)
         ->addContinent($c4);
      $manager->persist($a4);

      $a5 = new Animal();
      $a5->setName('requin')
      ->setDescription("Un animal marin très dangereux")
         ->setImage("requin.png")
         ->setWeight(800)
         ->setDangerous(true)
         ->setFamilly($f3)
         ->addContinent($c4)
         ->addContinent($c5);
      $manager->persist($a5);

      $d1 = new Dispose();
      $d1->setPersonne($p1)
         ->setAnimal($a1)
         ->setNb(30);
      $manager->persist($d1);

      $d2 = new Dispose();
      $d2->setPersonne($p1)
         ->setAnimal($a2)
         ->setNb(10);
      $manager->persist($d2);

      $d3 = new Dispose();
      $d3->setPersonne($p1)
         ->setAnimal($a3)
         ->setNb(2);
      $manager->persist($d3);

      $d4 = new Dispose();
      $d4->setPersonne($p2)
         ->setAnimal($a3)
         ->setNb(5);
      $manager->persist($d4);

      $d5 = new Dispose();
      $d5->setPersonne($p2)
         ->setAnimal($a4)
         ->setNb(10);
      $manager->persist($d5);

      $d6 = new Dispose();
      $d6->setPersonne($p3)
         ->setAnimal($a5)
         ->setNb(20);
      $manager->persist($d6);


      $manager->flush();
    }
}
