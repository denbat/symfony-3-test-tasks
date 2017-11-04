<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * Class Goods
 * @package AppBundle\Entity
 */
class Goods
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $description;

    /**
     * @var ArrayCollection
     */
    private $photos;

    /**
     * @var ArrayCollection
     */
    private $prices;

    /**
     * Goods constructor.
     *
     * @param $title
     * @param null $description
     */
    public function __construct($title, $description = null)
    {
        $this->title = $title;
        $this->description = $description;
        $this->prices = new ArrayCollection();
        $this->photos = new ArrayCollection();
    }

    /**
     * @param Photo $photo
     * @return $this
     */
    public function addPhoto(Photo $photo)
    {
        $photo->setGoods($this);
        if (!$this->photos->contains($photo)) {
            $this->photos->add($photo);
        }

        return $this;
    }

    /**
     * @param Price $price
     * @return $this
     */
    public function addPrice(Price $price)
    {
        $price->setGoods($this);
        if (!$this->prices->contains($price)) {
            $this->prices->add($price);
        }

        return $this;
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
     * Set title
     *
     * @param string $title
     *
     * @return Goods
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Goods
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set Photo
     *
     * @param ArrayCollection $photos
     */
    public function setPhotos($photos)
    {
        $this->photos = $photos;
    }

    /**
     * Get Photo
     *
     * @return ArrayCollection
     */
    public function getPhotos()
    {
        return $this->photos;
    }

    /**
     * Set Price
     *
     * @param ArrayCollection $prices
     */
    public function setPrices($prices)
    {
        $this->prices = $prices;
    }

    /**
     * Get Price
     *
     * @return ArrayCollection
     */
    public function getPrices()
    {
        return $this->prices;
    }
}

