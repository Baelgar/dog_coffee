<?php

namespace AppBundle\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class HomeController extends Controller{

    /**
     * @Route ("/", name="home")
     */
    public function homeAction(){
        return $this->render('home/home.html.twig');
    }



}