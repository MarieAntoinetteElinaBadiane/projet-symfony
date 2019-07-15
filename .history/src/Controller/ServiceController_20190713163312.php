<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Service;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Employer;

class ServiceController extends AbstractController
{
    /**
     * @Route("/service", name="service")
     */
    public function index(Request $request, ObjectManager $manager)
    {
        $employe = new Employer();
        $form = $this->createFormBuilder($employe)
          ->add('matricule')
          ->add('nomComplet')
          ->add('datenaissance',)
          ->add('salaire')
          ->getForm();
          $form->handleRequest($request);
        return $this->render('service/index.html.twig', [
            'controller_name' => 'ServiceController',
            'formEmployer'=>$form->createView()
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
    public function ajout(Request $request, ObjectManager $manager){
        $service = new Service();
        $form = $this->createFormBuilder($service)
          ->add('libelle')
          ->getForm();
          $form->handleRequest($request);
          if ($form->isSubmitted() && $form->isValid()) {
              $manager->persist($service);
              $manager->flush();
          }
        return  $this->render('service/ajout.html.twig',[
            'formService'=>$form->createView()
        ]);
    }
}
