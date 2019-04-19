<?php

namespace AppBundle\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class DogListController extends Controller
{
    /**
     * @Route ("/nos-chiens", name="dogs")
     */
    public function dogAction(Request $request)
    {
        $dogs = array(
            "chien1.jpg",
            "chien2.jpg",
            "chien7.jpg",
            "chien8.jpg",
            "chien9.jpg",
            "chien4.png",
        );

        return $this->render('dogslist/dogs.html.twig', [
            "dog_profiles" => $dogs
        ]);
    }
}