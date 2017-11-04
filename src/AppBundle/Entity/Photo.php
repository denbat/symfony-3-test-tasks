<?php

namespace AppBundle\Entity;

/**
 * Photo
 *
 * @package AppBundle\Entity
 */
class Photo
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $goodsId;

    /**
     * @var Goods
     */
    private $goods;

    /**
     * @var string
     */
    private $basename;

    /**
     * Photo constructor.
     *
     * @param Goods $goods
     * @param string $basename
     */
    public function __construct(Goods $goods, $basename)
    {
        $this->setGoods($goods);
        $this->basename = $basename;
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set goods
     *
     * @param Goods $goods
     *
     * @return Photo
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
     * Set basename
     *
     * @param string $basename
     *
     * @return Photo
     */
    public function setBasename($basename)
    {
        $this->basename = $basename;

        return $this;
    }

    /**
     * Get basename
     *
     * @return string
     */
    public function getBasename()
    {
        return $this->basename;
    }
}

