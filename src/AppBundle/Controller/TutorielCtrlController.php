<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class TutorielCtrlController extends Controller
{
    /**
     * @Route(
     *
     *     path="/hello/{meh}",
     *     name="TutorielCtrl_hello",
     *     requirements={"nom" : "[A-Za-z]+"}
     * )
     *
     */
    public function helloAction($meh)
    {
        $page = "<!DOCTYPE html><html><body><h1>BONJOUR " . $meh . " </h1></body></html>";
        return new Response($page);


    }

}
