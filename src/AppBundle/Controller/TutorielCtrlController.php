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
     *     path="/hello/{nom}",
     *     name="TutorielCtrl_hello",
     *     requirements={"nom" : "[A-Za-z]+"}
     * )
     *
     */
    public function helloAction($nom)
    {
        $page = "<!DOCTYPE html><html><body><h1>BONJOUR " . $nom . " </h1></body></html>";
        return new Response($page);
    }

    /**
     * @Route(
     *
     *     path="/redirect/{nom}",
     *     name="TutorielCtrl_redirect"
     * )
     *
     */
    public function redirectAction($nom)
    {
        $newMeh = $nom . " Apres redirection !";
        $newMeh = preg_replace("#[^a-zA-Z]#", "", $newMeh);
        return $this->redirectToRoute('TutorielCtrl_hello', array('nom' => $newMeh));
    }


    /**
     * @param $nom
     * @return Response
     *
     * @Route(
     *     path="/transferer/{nom}",
     *     name="TutorielCtrl_transferer",
     *     requirements={"nom" : "[A-Za-z]+"}
     * )
     */
    public function transfertAction($nom){
        $param = $nom . " (Transféré  à " . date("d/m/Y - H:i") . " ) ";
        return $this->forward('AppBundle:TutorielCtrl:hello', array('nom' => $param));
    }
}
