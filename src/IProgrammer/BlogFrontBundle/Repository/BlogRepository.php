<?php

namespace IProgrammer\BlogFrontBundle\Repository;

use Doctrine\Common\Collections\Criteria;

/**
 * Blog Repository
 */
class BlogRepository extends BaseEntityRepository implements FilterableRepositoryInterface
{
    /**
     * {@inheritDoc}
     */
    public function findAllWithCriteria(Criteria $criteria)
    {
        return $this->createQueryBuilder('b')
            ->select('b')
            ->addCriteria($criteria)
            ->orderBy("b.createdAt", 'DESC')
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

        return (int) $this->createQueryBuilder('b')
            ->select('count(b)')
            ->addCriteria($countCriteria)
            ->getQuery()
            ->getSingleScalarResult();
    }

    public function findByUserCategory($user, $category)
    {
        $qb = $this->createQueryBuilder('b')
            ->select('b')
            ->innerJoin('b.po', 'po')
            ->where('b.user = :user_id')
            ->andWhere('po.category = :category_id')
            ->orderBy('b.createdAt', 'DESC')
            ->setParameter('user_id', $user)
            ->setParameter('category_id', $category);

        return $qb->getQuery()
            ->getResult();
    }
}
