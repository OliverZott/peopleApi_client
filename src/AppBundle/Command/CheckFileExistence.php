<?php

namespace AppBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class CheckFileExistence extends ContainerAwareCommand
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $this
            ->setName('app:check_file_existence_command')
            ->setDescription('Synchronizing contacts via google PeopleAPI')
            ->addArgument('fileName', InputArgument::REQUIRED);
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {

        // Check if file exists (e.g. credentials.json)
        $fileName = $input->getArgument('fileName');

        if(!file_exists($input->getArgument('fileName')))
        {
            echo sprintf('File "%s" does not exist!', $fileName) . "\n";

        } else echo sprintf('All ok, file "%s" exists.', $fileName) . "\n";


    }
}
