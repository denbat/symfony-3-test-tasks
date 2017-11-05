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
        $manager->persist(new Price($goods, 10, 1));
        $manager->persist(new Price($goods, 40, 2));

        // Set Photos
        $manager->persist(new Photo($goods, 'images/goods_1.jpg'));
        $manager->persist(new Photo($goods, 'images/goods_2.jpg'));


        // Goods #2
        $goods = new Goods("Goods #2", "Desctioption #2");
        $manager->persist($goods);
        $manager->flush();

        // Set Prices
        $manager->persist(new Price($goods, 20, 1));
        $manager->persist(new Price($goods, 50, 2));

        // Set Photos
        $manager->persist(new Photo($goods, 'images/goods_3.jpg'));


        // Goods #2
        $goods = new Goods("Goods #3", "Desctioption #3");
        $manager->persist($goods);
        $manager->flush();

        // Set Prices
        $manager->persist(new Price($goods, 30, 1));


        $manager->flush();
    }
}
