<?php

namespace Home\HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
    public function indexAction()
    {
        return $this->render('HomeHomeBundle::index.html.twig');
    }
}
