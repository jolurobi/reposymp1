<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Controller;

/**
 * Description of TextoController
 *
 * @author Jose Luis
 */
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class TextoController extends Controller{
    //put your code here
     public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('AppBundle:texto:index.html.twig', array(
            'texto' => "Envio desde indexAction de TextoController"
        ));
    }
}
