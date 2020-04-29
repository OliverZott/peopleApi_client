<?php

namespace AppBundle\Command;

use AppBundle\Entity\Person;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Tools\SchemaTool;
use Doctrine\ORM\Tools\ToolsException;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;


class AddPersonToDatabaseCommand extends ContainerAwareCommand
{

    // TODO: Create People-generating service and Inject (DI) below in constructor
    // TODO:
    protected $em;
    public function __construct(EntityManagerInterface $em)
    {
        parent::__construct();
        $this->em = $em;
    }


    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $this
            ->setName('app:add_person_to_database_command')
            ->setDescription('Hello PhpStorm')
            ->addArgument('name', InputArgument::REQUIRED, 'name of the person');
    }


    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        // Entity Manager instance
        $em = $this->em;


        $name = $input->getArgument('name');
        $person = new Person();
        $person->setName($name);


        $em->persist($person);
        $em->flush();


        $output->writeln('---- Store person in database ----');
        $output->writeln('Person added to Database: '. $input->getArgument('name'));


    }
}
