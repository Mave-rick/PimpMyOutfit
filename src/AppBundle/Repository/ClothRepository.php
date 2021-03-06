<?php

namespace AppBundle\Repository;

/**
 * ClothRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ClothRepository extends \Doctrine\ORM\EntityRepository
{
    public function tshirtActionByTemp( $temperature)
    { 
        return $this->getEntityManager()
        ->createQuery(
            "SELECT c
            FROM AppBundle:Cloth c
            WHERE c.part = '4'
            AND c.temperature > :temperature"

            )->setParameter('temperature' , $temperature)


            ->getResult();

    }
    public function uptActionByTemp($temperature)
    {
        return $this->getEntityManager()
        ->createQuery(
            "SELECT c
            FROM AppBundle:Cloth c
            WHERE c.part = '5'
            AND c.temperature > :temperature"

            )->setParameter('temperature' , $temperature)


            ->getResult();

    }
    public function downtActionByTemp($temperature)
    {
        return $this->getEntityManager()
        ->createQuery(
            "SELECT c
            FROM AppBundle:Cloth c
            WHERE c.part = '3'
            AND c.temperature > :temperature"

            )->setParameter('temperature' , $temperature)


            ->getResult();

    }
}
