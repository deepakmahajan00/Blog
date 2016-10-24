<?php

namespace IProgrammer\BlogFrontBundle\Service;

use IProgrammer\BlogFrontBundle\Entity\Category;
use IProgrammer\BlogFrontBundle\Repository\CategoryRepository;
use IProgrammer\BlogFrontBundle\Exception\ResourceNotFoundException;

class CategoryService extends BaseEntityService
{
    /**
     * CategoryService constructor.
     * @param CategoryRepository $categoryRepository
     */
    public function __construct(CategoryRepository $categoryRepository)
    {
        parent::__construct($categoryRepository);
    }

    public function findAllByCategoriesUser($id, $userId)
    {
        $categories = $this->entityRepository->findAllByUserCategory($userId, $id);

        if (!$categories) {
            throw new ResourceNotFoundException("Could not find blog with categoryId '{$id}' for userId '{$userId}'");
        }

        return $categories;
    }
}