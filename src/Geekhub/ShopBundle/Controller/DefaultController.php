<?php

namespace Geekhub\ShopBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Doctrine\ORM\EntityManager;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('GeekhubShopBundle:Default:index.html.twig');
    }

    public function productAction()
    {
        $product = $this->getDoctrine()->getRepository('GeekhubShopBundle:Product');

        return $this->render('GeekhubShopBundle:Default:product.html.twig', array('products' => $product->findAll()));
    }

    public function infoAction($id)
    {

    }
}
