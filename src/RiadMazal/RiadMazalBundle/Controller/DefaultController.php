<?php

namespace RiadMazal\RiadMazalBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use RiadMazal\RiadMazalBundle\Entity\Offres;
use RiadMazal\RiadMazalBundle\Entity\Reservation;



class DefaultController extends Controller
{
    
     
    
    public function indexAction(Request $request)
    {
         $locale = $request->getLocale();
         
         $offres = $this->getDoctrine()
        ->getRepository('RiadMazalBundle:Offres')
         ->findAll();
        
   
        return $this->render('RiadMazalBundle:Default:index.html.twig',array('offres'=>$offres,
                                                                              'local'=>$locale));
    }
     public function discoverAction()
    {
        return $this->render('RiadMazalBundle:Default:layers/gallery.html.twig');
    }
      public function termsAction()
    {
        return $this->render('RiadMazalBundle:Default:layers/terms.html.twig');
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
    
    $offres = $this->getDoctrine()
        ->getRepository('RiadMazalBundle:Offres');
        

    if (!$offres) {
        throw $this->createNotFoundException(
            'there is not offers for the moment'
        );
    }
        return $this->render('RiadMazalBundle:Default:layers/offre.html.twig',array('offres'=>$offres ));
    } 
    
    
    public function  EmailAction(Request $request){
        
         $form = $this->createFormBuilder()
        // ...
        ->getForm();

    $form->handleRequest($request);
        $nom = $request->request->get('nom');
        $email = $request->request->get('email');
        $pays= $request->request->get('pays');
        $tel = $request->request->get('tel');
        //shambre
        
        $c_s = $request->request->get('c_s');
        
        $c_l = $request->request->get('c_l');
        $c_b = $request->request->get('c_b');
        $c_lis = $request->request->get('c_lis');
        $c_a_e_c = $request->request->get('c_a_e_c');
        $suit_b = $request->request->get('suit_b');
        $suit_r = $request->request->get('suit_r');
        $r_c = $request->request->get('r_c');
        
               
        $nb_adu = $request->request->get('nb_adu');
        $nb_en = $request->request->get('nb_en');
        $nb_nuits = $request->request->get('nb_nuits');
        $date_arrive = $request->request->get('date_arrive');
        $date_depart = $request->request->get('date_depart');
        
        $spa = ($request->request->get('spa'));
        $dinner = ($request->request->get('dinner'));
        $optional = ($request->request->get('optional'));
        $num_carte = ($request->request->get('num_carte')); 
        $date_exp = ($request->request->get('date_exp'));
        $cvc = ($request->request->get('cvc'));
        
    $reservation = new Reservation();
    $reservation->setNom($nom);
    $reservation->setEmail($email);
    $reservation->setPhone($tel);
    $reservation->setPays($pays);
    $Chambres= $c_s .$c_l.$c_b.$c_lis.$c_a_e_c.$suit_b.$suit_r .$r_c;
    $reservation->setChambres($Chambres);
    $reservation->setNuits($nb_nuits);
    $reservation->setArrivee($date_arrive);
    $reservation->setDepart($date_depart);
    $reservation->setAdulte($nb_adu);
    $reservation->setEnfant($nb_en);
    $em = $this->getDoctrine()->getManager();
    // tells Doctrine you want to (eventually) save the Product (no queries yet)
    $em->persist($reservation);

    // actually executes the queries (i.e. the INSERT query)
    $em->flush();
   
        $message = \Swift_Message::newInstance()
        ->setSubject('Reservation')
        ->setFrom('postmaster@riadmazal.com')
        ->setTo('riadmazal@gmail.com')
        ->setBody(
            $this->renderView(
                // app/Resources/views/Emails/registration.html.twig
                'RiadMazalBundle:Default:Emails/Resevation.html.twig',
                array('name' => $nom,
                    'email' => $email,
                    'phone' => $tel,
                    'pays' => $pays,
                    'adule_nombre' => $nb_adu,
                    'enfant_nombre' => $nb_en,
                    'nuits_nombre' => $nb_nuits ,
                    'date_arrive' => $date_arrive,
                    'date_depart' => $date_depart,
                    'c_s' => $c_s,
                    'c_l' => $c_l,
                    'c_b' => $c_b,
                    'c_lis' => $c_lis,
                    'c_a_e_c' => $c_a_e_c ,
                     'suit_b' => $suit_b,
                    'suit_r' => $suit_r,
                    'r_c' => $r_c,
                    'spa' => $spa,
                    'dinner' => $dinner ,
                    'optional' => $optional,
                    'num_carte' => $num_carte,
                    'date_exp' => $date_exp,
                    'cvc' => $cvc,
                )
            ),
            'text/html'
        )
        /*
         * If you also want to include a plaintext version of the message
        ->addPart(
            $this->renderView(
                'Emails/registration.txt.twig',
                array('name' => $name)
            ),
            'text/plain'
        )
        */
    ;
    $this->get('mailer')->send($message);
    
  

    return $this->render('RiadMazalBundle:Default:Emails/Reserve.html.twig',array('nom'=>$nom ));
    }
          
}
