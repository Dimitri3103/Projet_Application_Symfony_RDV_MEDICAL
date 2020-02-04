<?php

namespace admin\personneBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('adminpersonneBundle:Default:index.html.twig');
    }
}
