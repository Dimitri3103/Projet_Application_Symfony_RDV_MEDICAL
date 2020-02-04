<?php

namespace admin\personneBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class rdvController extends Controller
{
    public function rdvAction()
    {
        return $this->render('adminpersonneBundle:rdv:rdv.html.twig', array(
            // ...
        ));
    }

}
