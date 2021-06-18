<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\CommentsRepository;
use App\Entity\AuthoredEntityInterface;
use App\Entity\CreatedDateEntityInterface;
use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Annotation\ApiSubresource;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ApiResource(
 *      normalizationContext={"groups" = {"read:comments:collection"}},
 *      itemOperations={
 *          "get" = {
 *              "normalization_context" = {
 *                  "groups" = {"read:comments:collection", "read:comments:item", "read:comments:owner"}
 *              }
 *          }
 *      }
 * )
 * @ORM\Entity(repositoryClass=CommentsRepository::class)
 */
class Comments implements AuthoredEntityInterface, CreatedDateEntityInterface
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups({"read:rapport:comments", "read:comments:collection"})
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"read:rapport:comments", "read:comments:collection", "read:comments:item"})
     */
    private $content;

    /**
     * @ORM\Column(type="datetime")
     * @Groups({"read:rapport:comments", "read:comments:collection", "read:comments:item"})
     */
    private $createdAt;

    /**
     * @ORM\Column(type="boolean", nullable = true, options={"default":1})
     * @Groups({"read:comments:item"})
     */
    private $isPublished;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="comments")
     * @Groups({"read:comments:collection", "read:comments:owner"})
     */
    private $user;

    /**
     * @ORM\ManyToOne(targetEntity=Rapport::class, inversedBy="comments")
     */
    private $rapport;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(string $content): self
    {
        $this->content = $content;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): CreatedDateEntityInterface
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getIsPublished(): ?bool
    {
        return $this->isPublished;
    }

    public function setIsPublished(bool $isPublished): self
    {
        $this->isPublished = $isPublished;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(UserInterface $user): AuthoredEntityInterface
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
