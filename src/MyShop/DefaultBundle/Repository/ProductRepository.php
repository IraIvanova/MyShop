<?php

namespace MyShop\DefaultBundle\Repository;

/**
 * ProductRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ProductRepository extends \Doctrine\ORM\EntityRepository
{
    public function getProductListForMainPage()
    {
        $dql = 'select prod from MyShopDefaultBundle:Product prod where prod.isShowOnMainPage = true';
        $products = $this->getEntityManager()->createQuery($dql)->getResult();
        return $products;
    }
}
