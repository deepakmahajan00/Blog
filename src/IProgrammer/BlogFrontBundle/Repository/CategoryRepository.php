<?php

namespace IProgrammer\BlogFrontBundle\Repository;

use Doctrine\Common\Collections\Criteria;

/**
 * Categories Repository
 */
class CategoryRepository extends BaseEntityRepository implements FilterableRepositoryInterface
{
    /**
     * {@inheritDoc}
     */
    public function findAllWithCriteria(Criteria $criteria)
    {
        return $this->createQueryBuilder('c')
            ->select('c')
            ->addCriteria($criteria)
            ->getQuery()
            ->getResult();
    }

    /**
     * {@inheritDoc}
     */
    public function count(Criteria $criteria)
    {
        $countCriteria = clone $criteria;
        $countCriteria->setMaxResults(null)->setFirstResult(null);

        return (int) $this->createQueryBuilder('c')
            ->select('count(c)')
            ->addCriteria($countCriteria)
            ->getQuery()
            ->getSingleScalarResult();
    }

    public function findAllByUserCategory($userId, $id) {
        return $this->createQueryBuilder('c')
            ->select('c')
            ->join('c.po', 'po')
            ->join('po.blog', 'b')
            ->join('b.user', 'u')
            ->where('c.id = :id')
            ->andWhere('b.user = :userid')
            ->setParameter('userid', $userId)
            ->setParameter('id', $id)
            ->getQuery()
            ->getResult();
    }
}
