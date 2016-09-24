<?php

namespace AppBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class HiCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('hi')
            ->setDescription('Hello world command.')
            ->addArgument('name', InputArgument::OPTIONAL, 'Hello to NAME')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        if (strtolower($input->getArgument('name')) == "carlos") {
            $output->writeln('Hallo Knallkopf.');
        } elseif ($input->getArgument('name')) {
            $output->writeln('Que paso?? '.$input->getArgument('name').' el sabiondo!!!');
        } else {
            $output->writeln('Hallo.');
        }
    }


}
