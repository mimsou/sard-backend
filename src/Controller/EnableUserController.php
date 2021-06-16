<?php

namespace App\Controller;

use App\Entity\User;
use App\Repository\UserRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class EnableUserController extends AbstractController
{
    /** @var UserRepository $userRepo */
    private $userRepo;

    public function __construct(UserRepository $userRepo)
    {
        $this->userRepo = $userRepo;
    }

    public function __invoke(User $data): User
    {
        $data->setIsEnabled(true);
        return $data ;
    }
}
