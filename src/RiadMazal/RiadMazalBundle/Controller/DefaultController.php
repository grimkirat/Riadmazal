<?php

namespace RiadMazal\RiadMazalBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;



class DefaultController extends Controller
{

    public function indexAction(Request $request)
    {
        $locale = $request->getLocale();
        
        return $this->render('RiadMazalBundle:Default:index.html.twig');
    }
     public function discoverAction()
    {
        return $this->render('RiadMazalBundle:Default:layers/gallery.html.twig');
    }
     public function roomsAction()
    {
        return $this->render('RiadMazalBundle:Default:layers/rooms.html.twig');
    }
      public function servicesAction()
    {
        return $this->render('RiadMazalBundle:Default:layers/service.html.twig');
    }
       public function cityAction()
    {
        return $this->render('RiadMazalBundle:Default:layers/city.html.twig');
    }
       public function clientAvisAction()
    {
        return $this->render('RiadMazalBundle:Default:layers/clientAvis.html.twig');
    } 
       public function golfAction()
    {
        return $this->render('RiadMazalBundle:Default:layers/golf.html.twig');
    } 
       public function quadAction()
    {
        return $this->render('RiadMazalBundle:Default:layers/quad.html.twig');
    } 
       public function tarificationAction()
    {
        return $this->render('RiadMazalBundle:Default:layers/tarification.html.twig');
    } 
       public function montgolfiereAction()
    {
        return $this->render('RiadMazalBundle:Default:layers/montgolfiere.html.twig');
    } 
       public function reservationAction()
    {
        return $this->render('RiadMazalBundle:Default:layers/reservation.html.twig');
    } 
       public function contactAction()
    {
        return $this->render('RiadMazalBundle:Default:layers/contact.html.twig');
    } 
          public function offreAction()
    {
        return $this->render('RiadMazalBundle:Default:layers/offre.html.twig');
    } 
          public function languageAction()
    {
               $form = $this->createForm(RechercheType::class);
          $request = Request::createFromGlobals();
         
        
          $form->handleRequest($request);
             var_dump($request);
               die();
        return $this->render('RiadMazalBundle:Default:layers/offre.html.twig');
    } 
}
