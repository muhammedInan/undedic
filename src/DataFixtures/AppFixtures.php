<?php

namespace App\DataFixtures;

use App\Entity\Student;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for($i = 1; $i <= 10; $i++){
        $student = new Student();

        $student->setFirstName("prenom de l'étudiant $i")
                ->setLastName("nom de l'etudiant")
                ->setNumEtud(mt_rand(10, 10000));

        $manager->persist($student);
        }


        $manager->flush();
    }
}
