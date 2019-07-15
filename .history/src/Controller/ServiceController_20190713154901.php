<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Service;
use Symfony\Component\BrowserKit\Request;
use Doctrine\Common\Persistence\ObjectManager;

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
    public function ajout(Request $request, ObjectManager $Mana){
        $service = new Service();
        $form = $this->createFormBuilder($service)
          ->add('libelle')
          ->getForm();
          $form
        return  $this->render('service/ajout.html.twig');
    }
}
