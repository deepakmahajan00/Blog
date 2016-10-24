<?php

namespace IProgrammer\BlogFrontBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use IProgrammer\BlogFrontBundle\Entity\Category;
use \Doctrine\Common\DataFixtures\OrderedFixtureInterface;

class LoadCategoriesData implements FixtureInterface, OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $category = new Category();
        $category->setCategoryName('Travel');
        $manager->persist($category);

        $category = new Category();
        $category->setCategoryName('Photograph');
        $manager->persist($category);

        $category = new Category();
        $category->setCategoryName('Nature');
        $manager->persist($category);

        $manager->flush();
    }

    /**
     *
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 2;
    }
}