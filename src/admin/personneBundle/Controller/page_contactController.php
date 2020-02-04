<?php

namespace admin\personneBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class page_contactController extends Controller
{
    public function contactAction()
    {
        return $this->render('adminpersonneBundle:page_contact:contact.html.twig', array(
            // ...
        ));
    }

}
