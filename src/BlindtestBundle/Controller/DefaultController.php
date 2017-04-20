<?php

namespace BlindtestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('BlindtestBundle:Default:index.html.twig');
    }
}
