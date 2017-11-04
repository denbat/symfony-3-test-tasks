<?php

namespace AppBundle\Repository;
use Doctrine\ORM\Query\ResultSetMapping;

/**
 * GoodsRepository
 */
class GoodsRepository extends \Doctrine\ORM\EntityRepository
{
    /**
     * @param int $priceTypeId
     *
     * @return array
     */
    public function findByPriceTypeId($priceTypeId)
    {
        $rsm = new ResultSetMapping();
        $rsm->addEntityResult('AppBundle\Entity\Goods', 'g');
        $rsm->addFieldResult('g', 'id', 'id');
        $rsm->addFieldResult('g', 'title', 'title');
        $rsm->addJoinedEntityResult('AppBundle\Entity\Price', 'p', 'g', 'prices');
        $rsm->addFieldResult('p', 'price_type_id', 'priceTypeId');
        $rsm->addFieldResult('p', 'p_goods_id', 'goodsId');
        $rsm->addFieldResult('p', 'price', 'price');
        $rsm->addJoinedEntityResult('AppBundle\Entity\Photo', 'ph', 'g', 'photos');
        $rsm->addFieldResult('ph', 'ph_id', 'id');
        $rsm->addFieldResult('ph', 'ph_goods_id', 'goodsId');
        $rsm->addFieldResult('ph', 'basename', 'basename');

        $query = $this->getEntityManager()
            ->createNativeQuery('
                SELECT g.id, g.title, g.description, 
                       ph.id AS ph_id, ph.goods_id AS ph_goods_id, ph.basename, 
                       p.price_type_id, p.goods_id AS p_goods_id, p.price
                FROM goods g
                JOIN price p ON p.goods_id=g.id
                LEFT JOIN photo ph ON ph.goods_id=g.id
                WHERE p.price_type_id = ?
                ORDER BY FIELD(g.id, 2, 3, 1)    
            ', $rsm)
            ->setParameter(1, $priceTypeId);

        return $query->getResult();
    }
}
