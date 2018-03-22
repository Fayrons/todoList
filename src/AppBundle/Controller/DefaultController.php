<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();

        $allTickets = $em->getRepository("AppBundle:Ticket")->findAll();

        $now = new \DateTime("now");
        $ticketsOfTheDay = $em->getRepository("AppBundle:Ticket")->findByDateExecution($now);

//        dump($allTickets);
//        dump($ticketsOfTheDay);exit;

        // replace this example code with whatever you need
        return $this->render('default/home.twig', [
            'allTickets' => $allTickets,
            'ticketsOfTheDay' => $ticketsOfTheDay,
        ]);
    }
}
