<?php


namespace AppBundle\Service;


use Symfony\Component\HttpFoundation\Request;

class GreetService
{

    /**
     * @param Request $request
     * @return string
     */
    public function getNameFromRequest(Request $request): string
    {
        return $request->get('name');
    }


    /**
     * @param Request $request
     * @return string
     */
    public function getUri(Request $request): string
    {
        // var_dump($request->getUri());
        return $request->getUri();

    }
}