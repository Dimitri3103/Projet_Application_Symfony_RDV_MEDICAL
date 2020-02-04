<?php

namespace admin\personneBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class homeController extends Controller
{
    public function homeAction()
    {
        return $this->render('adminpersonneBundle:home:home.html.twig', array(
            // ...
        ));
    }

}
