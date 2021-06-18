<?php

namespace App\Entity;

use DateTimeInterface;

interface CreatedDateEntityInterface
{
    public function setCreatedAt(\DateTimeInterface $createdAt) : CreatedDateEntityInterface ;
}