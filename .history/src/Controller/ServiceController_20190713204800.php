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
