<?php

namespace App\Service\GPMB;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AgregaGenerator extends AbstractController
{

    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function index()
    {
        dd($this->getDoctrine()->getManager('gpmb_db'));
    }


}