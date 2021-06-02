<?php
namespace App\Security;

use App\Entity\User;
use Symfony\Component\Security\Core\Exception\DisabledException;
use Symfony\Component\Security\Core\User\UserCheckerInterface;
use Symfony\Component\Security\Core\User\UserInterface;

class UserChecker implements UserCheckerInterface
{
    /**
     * Checks the user account before authentication.
     *
     * @throws AccountStatusException
     */
    public function checkPreAuth(UserInterface $user)
    {
        if (! $user instanceof User) {
            return ;
        }

        if (! $user->getIsEnabled()) {
            throw new DisabledException('User account is disabled.');
        }
    }
    public function checkPostAuth(UserInterface $user){
        
    }
}