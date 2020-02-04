<?php

namespace admin\personneBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class servicesController extends Controller
{
    public function servicesAction()
    {
        return $this->render('adminpersonneBundle:services:services.html.twig', array(
            // ...
        ));
    }

}
