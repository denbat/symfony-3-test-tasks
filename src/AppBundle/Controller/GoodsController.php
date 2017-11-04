<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Goods;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class GoodsController extends Controller
{
    /**
     * @Route("/goods", name="goods")
     */
    public function indexAction()
    {
        return $this->render('AppBundle:Goods:index.html.twig', [
            'goods' => $this->getDoctrine()
                ->getManager()
                ->getRepository(Goods::class)
                ->findByPriceTypeId(1)
        ]);
    }

}
