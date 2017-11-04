<?php

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\Goods;
use AppBundle\Entity\Price;
use AppBundle\Entity\Photo;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

/**
 * Class GoodsFixtures
 *
 * @package AppBundle\DataFixtures\ORM
 */
class GoodsFixtures extends Fixture
{
    /**
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        // Goods #1
        $goods = new Goods("Goods #1", "Desctioption #1");
        $manager->persist($goods);
        $manager->flush();

        // Set Prices
        $price = new Price($goods, 10, 1);
        $goods->addPrice($price);
        $manager->persist($price);

        $price = new Price($goods, 40, 2);
        $goods->addPrice($price);
        $manager->persist($price);

        // Set Photos
        $photo = new Photo($goods, 'images/goods_1.jpg');
        $goods->addPhoto($photo);
        $manager->persist($photo);

        $photo = new Photo($goods, 'images/goods_2.jpg');
        $goods->addPhoto($photo);
        $manager->persist($photo);


        // Goods #2
        $goods = new Goods("Goods #2", "Desctioption #2");
        $manager->persist($goods);
        $manager->flush();

        // Set Prices
        $price = new Price($goods, 20, 1);
        $goods->addPrice($price);
        $manager->persist($price);

        $price = new Price($goods, 50, 2);
        $goods->addPrice($price);
        $manager->persist($price);

        // Set Photos
        $photo = new Photo($goods, 'images/goods_3.jpg');
        $goods->addPhoto($photo);
        $manager->persist($photo);


        // Goods #2
        $goods = new Goods("Goods #3", "Desctioption #3");
        $manager->persist($goods);
        $manager->flush();

        // Set Prices
        $price = new Price($goods, 30, 1);
        $goods->addPrice($price);
        $manager->persist($price);


        $manager->flush();
    }
}