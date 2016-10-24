<?php

namespace IProgrammer\BlogFrontBundle\Service;

use IProgrammer\BlogFrontBundle\Entity\User;
use IProgrammer\BlogFrontBundle\Repository\UserRepository;
use IProgrammer\BlogFrontBundle\Exception\ResourceNotFoundException;

class UserService extends BaseEntityService
{
    /**
     * UserService constructor.
     * @param UserRepository $userRepository
     */
    public function __construct(UserRepository $userRepository)
    {
        parent::__construct($userRepository);
    }

    /**
     * @param string| $username
     * @return null|User
     * @throws ResourceNotFoundException
     */
    public function findByUsername($username)
    {
        $user = $this->entityRepository->findOneBy(['username' => $username]);
        if (!$user) {
            throw new ResourceNotFoundException("Could not find user by username '{$username}'");
        }

        return $user;
    }
}