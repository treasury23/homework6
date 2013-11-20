<?php

namespace Geekhub\ShopBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('GeekhubShopBundle:Default:index.html.twig');
    }
}
