<?php

namespace App\Entity;

interface CreatedDateEntityInterface
{
    public function setCreatedAt(\DateTimeInterface $createdAt) : CreatedDateEntityInterface ;
}