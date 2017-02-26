<?php

namespace AppBundle\Model;


use AppBundle\Entity\User;
use AppBundle\Repository\UserRepository;
use Doctrine\ORM\EntityManager;

class UserModel
{
    /**
     * @var EntityManager $entityManager
     */
    private $entityManager;
    /**
     * @var UserRepository $userRepository
     */
    private $userRepository;

    public function __construct(EntityManager $entityManager, UserRepository $userRepository)
    {
        $this->entityManager = $entityManager;
        $this->userRepository = $userRepository;
    }

    
   public function getUserById(User $user){
       return $this->userRepository->findOneById($user);
   }
    
  
    public function getAllUser() {
        return $this->userRepository->findAll();
    }
}
