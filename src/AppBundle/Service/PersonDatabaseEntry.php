<?php


namespace AppBundle\Service;


use AppBundle\Entity\Person;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Tools\Console\Helper\EntityManagerHelper;

class PersonDatabaseEntry
{

    public function addPersonToDatabase(EntityManagerInterface $em, string $name)
    {

        //TODO: Create Person from DTO (iterate over DTOs?)
        $person = new Person();
        $person->setName($name);

        // Doctrine Entity Manager. When 'flush', doctrine sets ID
        $em->persist($person);
        $em->flush();

    }
}