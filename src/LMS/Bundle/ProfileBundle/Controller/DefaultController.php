<?php

namespace LMS\Bundle\ProfileBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('LMSProfileBundle:Default:index.html.twig');
    }
}
