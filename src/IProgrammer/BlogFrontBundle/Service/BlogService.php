<?php

namespace IProgrammer\BlogFrontBundle\Service;

use IProgrammer\BlogFrontBundle\Entity\Blog;
use IProgrammer\BlogFrontBundle\Repository\BlogRepository;
use IProgrammer\BlogFrontBundle\Exception\ResourceNotFoundException;

class BlogService extends BaseEntityService
{
    /**
     * BlogService constructor.
     * @param BlogRepository $blogRepository
     */
    public function __construct(BlogRepository $blogRepository)
    {
        parent::__construct($blogRepository);
    }

    public function findByCategory($criteria) {
        $blogs = $this->entityRepository->findByUserCategory($criteria['user'], $criteria['category']);

        if (!$blogs) {
            throw new ResourceNotFoundException("Could not find blog with categoryId '{$criteria['category']}' for userId '{$criteria['user']}'");
        }

        return $blogs;
    }
}