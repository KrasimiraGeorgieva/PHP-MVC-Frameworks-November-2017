<?php

namespace AppBundle\Repository;

/**
 * SupplierRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class SupplierRepository extends \Doctrine\ORM\EntityRepository
{
    function getAllSuppliersByType(string $type)
    {
        $isImporter = false;
        if ($type == 'isImporters'){
            $isImporter = true;
        }
        return $this->createQueryBuilder('supplier')
            ->where('supplier.isImporter = :isImporter')
            ->setParameter('isImporter', $isImporter)
            ->getQuery()
            ->getResult();
    }
}
