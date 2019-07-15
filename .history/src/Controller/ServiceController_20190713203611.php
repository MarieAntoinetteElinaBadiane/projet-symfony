<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Service;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Employer;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class ServiceController extends AbstractController
{
    /**
     * @Route("/service", name="service")
     */
    public function index(Request $request, ObjectManager $manager)
    {
        if(!$employe){
            $employe = new Employer();
           }
        $employe = new Employer();
        $form = $this->createFormBuilder($employe)
          ->add('matricule')
          ->add('nomComplet')
          ->add('datenaissance',DateType::class, [
              'widget'=>'single_text',
          ])
          ->add('salaire')
          ->add('service',EntityType::class,[
              'class'=> Service::class,
              'choice_label'=>'libelle',
          ])
          ->getForm();
          $form->handleRequest($request);
          if ($form->isSubmitted() && $form->isValid()) {
            $manager->persist($employe);
            $manager->flush();
        }

        return $this->render('service/index.html.twig', [
            'controller_name' => 'ServiceController',
            'formEmployer'=>$form->createView()
        ]);
    }
    /**
     * @Route("/", name="accueil")
     */
    public function accueil(){
        $employe = $this->getDoctrine()->getRepository(Employer::class)->findAll();
        return $this->render('service/accueil.html.twig',
            array('employe'=> $employe)
        );
    }
    /**
     * @Route("/service/ajout", name="ajout")
     *  @Route("/service/{id}/edit", name="modif")
     */
    public function ajout(Employer $employer=null, Request $request, ObjectManager $manager){
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
