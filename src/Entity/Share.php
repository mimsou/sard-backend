<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\ShareRepository;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * @ApiResource(
 *      subresourceOperations={
 *          "api_user_shared_rapport_get_subresource"={
 *              "normalization_context"={
 *                  "groups"={"get-rapport-with-user"}
 *              }
 *          }
 *      }
 * )
 * @ORM\Entity(repositoryClass=ShareRepository::class)
 */
class Share
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="boolean")
     */
    private $seen;

    /**
     * @ORM\Column(type="datetime")
     */
    private $lastSeen;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="shares")
     */
    private $user;

    /**
     * @ORM\ManyToOne(targetEntity=Rapport::class, inversedBy="shares")
     */
    private $rapport;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSeen(): ?bool
    {
        return $this->seen;
    }

    public function setSeen(bool $seen): self
    {
        $this->seen = $seen;

        return $this;
    }

    public function getLastSeen(): ?\DateTimeInterface
    {
        return $this->lastSeen;
    }

    public function setLastSeen(\DateTimeInterface $lastSeen): self
    {
        $this->lastSeen = $lastSeen;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getRapport(): ?Rapport
    {
        return $this->rapport;
    }

    public function setRapport(?Rapport $rapport): self
    {
        $this->rapport = $rapport;

        return $this;
    }
}
