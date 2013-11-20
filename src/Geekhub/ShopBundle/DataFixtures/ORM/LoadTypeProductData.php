<?php

namespace Geekhub\ShopBundle\DataFixtures\ORM;

use Geekhub\ShopBundle\Entity\TypeProduct;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;

class LoadTypeProductData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $typeProductsDemo = array(
                                    'Холодильник',
                                    'Весы напольные',
                                    'Кондиционер',
                                    'Вытяжка'
                                );

        foreach ($typeProductsDemo as $typeProductDemo) {

            $typeProduct = new TypeProduct();
            $typeProduct->setTitle($typeProductDemo);

            $manager->persist($typeProduct);

            $this->addReference($typeProductDemo, $typeProduct);
        }

        $manager->flush();
    }

    /**
     * Get the order of this fixture
     *
     * @return integer
     */
    function getOrder()
    {
        // TODO: Implement getOrder() method.
        return 3;
    }

}