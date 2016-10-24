<?php

namespace IProgrammer\BlogFrontBundle\Repository;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityRepository;

class BaseEntityRepository extends EntityRepository
{
    /**
     * @return EntityManager
     */
    public function getEntityManager()
    {
        return parent::getEntityManager();
    }

    /**
     * @param $entity
     * @return EntityManager
     */
    public function persist($entity)
    {
        $manager = $this->getEntityManager();
        $manager->persist($entity);

        return $manager;
    }

    /**
     * @param null|mixed $entity
     */
    public function save($entity = null)
    {
        if (!empty($entity)) {
            $this->persist($entity);
        }
        $this->getEntityManager()->flush($entity);
    }

    /**
     * @param $entity
     */
    public function remove($entity)
    {
        $manager = $this->getEntityManager();
        $manager->remove($entity);
        $manager->flush($entity);
    }

}
