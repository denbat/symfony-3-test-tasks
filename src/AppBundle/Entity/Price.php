<?php

namespace AppBundle\Entity;

/**
 * Price
 *
 * @package AppBundle\Entity
 */
class Price
{
    /**
     * @var int
     */
    private $priceTypeId;

    /**
     * @var int
     */
    private $goodsId;

    /**
     * @var Goods
     */
    private $goods;

    /**
     * @var float
     */
    private $price;

    /**
     * Price constructor.
     *
     * @param Goods $goods
     * @param float $price
     * @param integer $priceTypeId
     */
    public function __construct(Goods $goods, $price, $priceTypeId)
    {
        $this->setGoods($goods);
        $this->price = $price;
        $this->priceTypeId = $priceTypeId;
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getPriceTypeId()
    {
        return $this->priceTypeId;
    }

    /**
     * Set goods
     *
     * @param Goods $goods
     *
     * @return Price
     */
    public function setGoods(Goods $goods)
    {
        $this->goods = $goods;
        $this->goodsId = $goods->getId();

        return $this;
    }

    /**
     * Get goodsId
     *
     * @return int
     */
    public function getGoodsId()
    {
        return $this->goodsId;
    }

    /**
     * Get goods
     *
     * @return Goods
     */
    public function getGoods()
    {
        return $this->goods;
    }

    /**
     * Set price
     *
     * @param float $price
     *
     * @return Price
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }
}

