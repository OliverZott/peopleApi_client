<?php

namespace AppBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class GetPeopleCommand extends ContainerAwareCommand
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $this
            ->setName('app:get_people_command')
            ->setDescription('Retrieve people from google.people.api');
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {

        // Retrieve token from file
        $tokenFileContent = file_get_contents('token.json');
        $tokenArray = json_decode($tokenFileContent, true);
        $token = $tokenArray['access_token'];

        //$browser = new Browser();


    }

}
