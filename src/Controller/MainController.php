<?php

namespace App\Controller;

use App\helper\Rot13ConverterString;
use App\helper\Rot13ConverterArray;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MainController extends AbstractController
{
    /**
     * @var UserValidation
     * @Route("/", name="home")
     */

    public function index(Request $request, Rot13ConverterString $test, Rot13ConverterArray $test2)
    {   

        $html = json_encode($test -> ROT13(14));
        $html2 = json_encode($test2 -> ROT13(14));
        
        
        return $this->render('base.html.twig', ['html' => $html,'html2' => $html2] );
    }

    /**
     * @Route("/custom/{name?}", name="custom")
     * @param Request $request
     * @return Response
     */
}
