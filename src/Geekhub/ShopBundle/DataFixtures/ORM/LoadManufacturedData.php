<?php

namespace Geekhub\ShopBundle\DataFixtures\ORM;

use Geekhub\ShopBundle\Entity\Manufactured;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;

class LoadManufacturedData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $manufacturersDemo = array(
                                    'LG',
                                    'Samsung',
                                    'Indesit',
                                    'Gorenje',
                                    'Ardo',
                                    'Hotpoint Ariston',
                                    'Siemens',
                                    'Vestfrost',
                                    'Atlant',
                                    'Bosch',
                                    'Snaige',
                                    'Whirlpool',
                                    'Electrolux'
                                   );

        foreach ($manufacturersDemo as $manufacturedDemo) {

            $manufactured = new Manufactured();

            $manufactured->setTitle($manufacturedDemo);
            $manager->persist($manufactured);

            $this->addReference($manufacturedDemo, $manufactured);
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
        return 2;
    }

}