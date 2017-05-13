<?php

namespace Cov\ReclamationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ReclamationController extends Controller
{
    public function indexAction()
    {
        return $this->render('CovReclamationBundle:Default:contact.html.twig');
    }
}
