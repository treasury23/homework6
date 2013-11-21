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
        $product = $this->getDoctrine()->getRepository('GeekhubShopBundle:Product')->findOneById($id);

        if (!$product) {
            throw new \Exception("Product not found!");
        }

        return $this->render('GeekhubShopBundle:Default:info.html.twig', array('products' => $product));
    }

    public function deleteProductAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $product = $em->getRepository('GeekhubShopBundle:Product')->find($id);

        if (!$product) {
            throw new \Exception("Product not found!");
        }

        $em->remove($product);
        $em->flush();

        return $this->redirect($this->generateUrl('geekhub_shop_productpage'));
    }
}
