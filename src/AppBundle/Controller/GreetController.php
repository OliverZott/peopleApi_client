<?php

namespace AppBundle\Controller;

use AppBundle\Service\GreetService;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GreetController extends Controller
{

    // WHY NOT WORKING????
    // public $greetService = new GreetService();
    private $greetService;

    public function __construct(GreetService $greetService)
    {
        $this->greetService = $greetService;
    }


    /**
     * @Route("/greetz", name="greetz")
     * @param Request $request
     * @return Response
     */
    public function indexAction(Request $request)
    {

        $name = $this->greetService->getNameFromRequest($request);
        $uri = $this->greetService->getUri($request);

        return $this->render('greetings/greet.html.twig', array(
            'name' => $name,
            'uri' => $uri,
        ));
    }
}
