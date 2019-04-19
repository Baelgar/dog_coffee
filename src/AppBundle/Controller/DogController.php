<?php

namespace AppBundle\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DogController extends Controller{

    /**
     * @Route("/chien", name="chien")
     */
    public function indexAction(){

        $image = "chien1.jpg";

        return $this->render('dog/dog.html.twig',[
            'image' => $image,
        ]);
    }
}