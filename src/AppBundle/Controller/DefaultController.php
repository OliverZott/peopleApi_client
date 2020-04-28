<?php

namespace AppBundle\Controller;

use Google_Client;
use Google_Service_Books;
use Google_Service_PeopleService;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     * @param Request $request
     * @return Response
     */
    public function indexAction(Request $request)
    {
        //var_dump(phpinfo());
        //var_dump($this->get('kernel')->getProjectDir());die;


        /*
         * Try with ( http://127.0.0.1:8000/?name=Olli )
         */
        $name = $request->get('name');

        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
            'name' => $name,
        ]);
    }
}
