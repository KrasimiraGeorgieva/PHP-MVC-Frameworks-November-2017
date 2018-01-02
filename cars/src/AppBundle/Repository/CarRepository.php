<?php

namespace AppBundle\Repository;

/**
 * CarRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CarRepository extends \Doctrine\ORM\EntityRepository
{
    public function getCarsByMake(string $make)
    {
        return $this->createQueryBuilder('car')
            ->where('car.make = :make')
            ->setParameter('make', $make)
            ->getQuery()
            ->getResult();
    }

    function getCarParts(int $id)
    {
        return $this->createQueryBuilder('car')
            ->select('car.part')
            ->where('car.id = :id')
            ->setParameter('id', $id)
            ->getQuery()
            ->getResult();
    }
}
