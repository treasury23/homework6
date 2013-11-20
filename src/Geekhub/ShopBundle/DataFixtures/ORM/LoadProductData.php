<?php

namespace Geekhub\ShopBundle\DataFixtures\ORM;

use Geekhub\ShopBundle\Entity\Product;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;

class LoadProductData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $productsDemo = array(
            array('name' => 'Холодильник INDESIT',
                 'description' => 'Двухкамерный холодильник с нижним расположением морозильной камеры. Полезный объем: 339 л. Класс энергопотребления: A+. 1 компрессор.',
                 'price' => '30000',
                 'category' => 'Крупная бытовая техника',
                 'manufactured' => 'Indesit'),

            array('name' => 'Весы напольные ARDO',
                'description' => 'Электронные весы с платформой из прочного стекла. Допустимый вес: от 5 до 150 кг. Цена деления: 50 г. Функция удержания (точный вес шевелящегося младенца).',
                'price' => '1000',
                'category' => 'Мелкая бытовая техника',
                'manufactured' => 'Ardo'),

            array('name' => 'Кондиционер SAMSUNG',
                'description' => 'Настенная инверторная сплит-система. Серия: Maldives. Мощность (охл./обогр.): 2500 Вт/3300 Вт.',
                'price' => '20000',
                'category' => 'Климатическая техника',
                'manufactured' => 'Samsung'),

            array('name' => 'Вытяжка SIEMENS',
                'description' => 'Тип монтажа: настенная вытяжка. Режимы работы: отвод/рециркуляция',
                'price' => '5000',
                'category' => 'Встраиваемая техника',
                'manufactured' => 'Siemens')
        );

        foreach($productsDemo as $productDemo) {

            $product = new Product();

            $product->setName($productDemo['name']);
            $product->setDescription($productDemo['description']);
            $product->setPrice($productDemo['price']);
            $product->setCategory($this->getReference($productDemo['category']));
            $product->setManufactured($this->getReference($productDemo['manufactured']));

            $manager->persist($product);
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
        return 4;
    }
}