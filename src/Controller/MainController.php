<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;
use Symfony\Component\HttpFoundation\Request;

class MainController extends AbstractController
{
    /**
     * @var UserValidation
     * @Route("/", name="home")
     */

    public function index(Request $request)
    {

        $containerBuilder = new ContainerBuilder();
        $containerBuilder->register('transformerInterface', 'App\PhpCode\Generator\ArrayGenerator');
        $containerBuilder->register('generator', 'App\PhpCode\Generator\Output')
                         ->addArgument(new Reference('transformerInterface'));
        $containerBuilder = $containerBuilder->get('generator');
    
        $html = $containerBuilder->random(14);
        $html2 = JSON_encode($containerBuilder->randomArray(14, 3));

        return $this->render('base.html.twig', ['html' => $html, 'html2' => $html2]);
    }

}
