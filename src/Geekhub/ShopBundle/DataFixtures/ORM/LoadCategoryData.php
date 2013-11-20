<?php

namespace Geekhub\ShopBundle\DataFixtures\ORM;

use Geekhub\ShopBundle\Entity\Category;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;

class LoadCategoryData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $categoriesDemo = array(
                                'Встраиваемая техника',
                                'Крупная бытовая техника',
                                'Климатическая техника',
                                'Мелкая бытовая техника'
                                );

        foreach ($categoriesDemo as $categoryDemo) {

            $category = new Category();

            $category->setTitle($categoryDemo);
            $manager->persist($category);

            $this->addReference($categoryDemo, $category);
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
        return 1;
    }
}