<?php

namespace PK\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('CEUserBundle:Default:index.html.twig', array('name' => $name));
    }
}
