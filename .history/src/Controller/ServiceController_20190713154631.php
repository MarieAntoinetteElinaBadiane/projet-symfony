<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Service;

class ServiceController extends AbstractController
{
    /**
     * @Route("/service", name="service")
     */
    public function index()
    {
        return $this->render('service/index.html.twig', [
            'controller_name' => 'ServiceController',
        ]);
    }
    /**
     * @Route("/", name="accueil")
     */
    public function accueil(){
        return $this->render('service/accueil.html.twig');
    }
    /**
     * @Route("/service/ajout", name="ajout")
     */
    public function ajout(){
        $service = new Service();
        $form = $this->createFormBuilder();
        return  $this->render('service/ajout.html.twig');
    }
}
