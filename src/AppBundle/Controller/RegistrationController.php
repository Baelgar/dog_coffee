<?php

namespace AppBundle\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Form\Type\chienType;
use AppBundle\Form\Type\responsable_caninType;
use AppBundle\Form\Type\spaType;
use AppBundle\Form\Type\clientType;
use AppBundle\Entity\chien;
use AppBundle\Entity\responsable_canin;
use AppBundle\Entity\spa;
use AppBundle\Entity\client;


class RegistrationController extends Controller{

    /**
     * @Route ("/login", name="login")
     */
    public function loginAction(){
        return $this->render('connections/clientRegistration.html.twig');
    }

    /**
     * @Route ("enregistrement_chien", name="dogRegistration")
     */
    public function dogRegistrationAction(Request $request){

        $chien = new chien();

        $form = $this->createForm(chienType::class, $chien, [

        ]);

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $dogManager = $this->getDoctrine()->getManager();

            $dogManager->persist($chien);
            $dogManager->flush();

            $this->addFlash('success', 'Enregistrement du chien correctement effectué');

            $this->redirectToRoute('dogs');
        }

        return $this->render('connections/dogRegistration.html.twig', [
            'dog_registration_form'=> $form->createView(),
        ]);
    }



    /**
     * @Route ("enregistrement_responsable", name="responsbleRegistration")
     */
    public function responsableRegistrationAction(Request $request){

        $responsable = new responsable_canin();

        $form = $this->createForm(responsable_caninType::class, $responsable, [

        ]);

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $respManager = $this->getDoctrine()->getManager();

            $respManager->persist($responsable);
            $respManager->flush();

            $this->addFlash('success', 'Enregistrement du responsable correctement effectué');

            $this->redirectToRoute('home');
        }

        return $this->render('connections/responsableRegistration.html.twig', [
            'responsable_registration_form'=> $form->createView(),
        ]);
    }



    /**
     * @Route ("enregistrement_client", name="clientRegistration")
     */
    public function clientRegistrationAction(Request $request){

        $client = new client();

        $form = $this->createForm(clientType::class, $client, [

        ]);

        if($form->isSubmitted() && $form->isValid()){
            $clientManager = $this->getDoctrine()->getManager();

            $clientManager->persist($client);
            $clientManager->flush();

            $this->addFlash('success', 'Enregistrement du client correctement effectué');

            $this->redirectToRoute('home');
        }

        return $this->render('connections/clientRegistration.html.twig', [
            'client_registration_form'=> $form->createView(),
        ]);
    }



    /**
     * @Route ("enregistrement_spa", name="spaRegistration")
     */
    public function spaRegistrationAction(Request $request){

        $spa = new spa();

        $form = $this->createForm(spaType::class, $spa, [

        ]);

        if($form->isSubmitted() && $form->isValid()){
            $spaManager = $this->getDoctrine()->getManager();

            $spaManager->persist($spa);
            $spaManager->flush();

            $this->addFlash('success', 'Enregistrement du client correctement effectué');

            $this->redirectToRoute('home');
        }

        return $this->render('connections/spaRegistration.html.twig', [
            'spa_registration_form'=> $form->createView(),
        ]);
    }



}