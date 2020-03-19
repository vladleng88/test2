<?php

namespace App\Command;

use App\Helper\TestParserXMLHelper;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class TestPareserXMLCommand extends Command
{
    protected $ci;
    protected $tph;

    /**
     * ParseXmlCommand constructor.
     * @param ContainerInterface $ci
     **/
    public function __construct(ContainerInterface $ci, TestParserXMLHelper $tph)
    {
        $this->ci = $ci;
        $this->tph = $tph;
        parent::__construct();
    }


    protected function configure()
    {
        $this
            ->setName('app:testparse:xml')
            ->setDescription('Parse xml command.')
            ->setHelp('Parse xml command');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $t1 = microtime(true);
        $fullPathToXML = $this->ci->getParameter('kernel.project_dir') . "/public/upload/import/pricelist.xml";
        $output->writeln([
            'Parse xml',
            '==================',
            '',
            "parse directory: $fullPathToXML"
        ]);

        $string = file_get_contents($fullPathToXML);
        $this->tph->parseXml($string, $output);
    return 1;

    }
}