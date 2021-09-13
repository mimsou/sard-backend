<?php

namespace App\Entity;

use App\Repository\GPMBAgregaRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=GPMBAgregaRepository::class)
 */
class GPMBAgrega
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $aaaa;

    /**
     * @ORM\Column(type="integer")
     */
    private $mm;

    /**
     * @ORM\Column(type="integer")
     */
    private $jj;

    /**
     * @ORM\Column(type="string", length=1)
     */
    private $type_jour;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lib_jour;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lib_mois;

    /**
     * @ORM\Column(type="string", length=1)
     */
    private $saison;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lib_dir;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $affect;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $dispo;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $sortie;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $immo;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $immo_mo;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $immo_mp;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAaaa(): ?int
    {
        return $this->aaaa;
    }

    public function setAaaa(int $aaaa): self
    {
        $this->aaaa = $aaaa;

        return $this;
    }

    public function getMm(): ?int
    {
        return $this->mm;
    }

    public function setMm(int $mm): self
    {
        $this->mm = $mm;

        return $this;
    }

    public function getJj(): ?int
    {
        return $this->jj;
    }

    public function setJj(int $jj): self
    {
        $this->jj = $jj;

        return $this;
    }

    public function getTypeJour(): ?string
    {
        return $this->type_jour;
    }

    public function setTypeJour(string $type_jour): self
    {
        $this->type_jour = $type_jour;

        return $this;
    }

    public function getLibJour(): ?string
    {
        return $this->lib_jour;
    }

    public function setLibJour(string $lib_jour): self
    {
        $this->lib_jour = $lib_jour;

        return $this;
    }

    public function getLibMois(): ?string
    {
        return $this->lib_mois;
    }

    public function setLibMois(string $lib_mois): self
    {
        $this->lib_mois = $lib_mois;

        return $this;
    }

    public function getSaison(): ?string
    {
        return $this->saison;
    }

    public function setSaison(string $saison): self
    {
        $this->saison = $saison;

        return $this;
    }

    public function getLibDir(): ?string
    {
        return $this->lib_dir;
    }

    public function setLibDir(string $lib_dir): self
    {
        $this->lib_dir = $lib_dir;

        return $this;
    }

    public function getAffect(): ?int
    {
        return $this->affect;
    }

    public function setAffect(?int $affect): self
    {
        $this->affect = $affect;

        return $this;
    }

    public function getDispo(): ?int
    {
        return $this->dispo;
    }

    public function setDispo(?int $dispo): self
    {
        $this->dispo = $dispo;

        return $this;
    }

    public function getSortie(): ?int
    {
        return $this->sortie;
    }

    public function setSortie(?int $sortie): self
    {
        $this->sortie = $sortie;

        return $this;
    }

    public function getImmo(): ?int
    {
        return $this->immo;
    }

    public function setImmo(?int $immo): self
    {
        $this->immo = $immo;

        return $this;
    }

    public function getImmoMo(): ?int
    {
        return $this->immo_mo;
    }

    public function setImmoMo(?int $immo_mo): self
    {
        $this->immo_mo = $immo_mo;

        return $this;
    }

    public function getImmoMp(): ?int
    {
        return $this->immo_mp;
    }

    public function setImmoMp(?int $immo_mp): self
    {
        $this->immo_mp = $immo_mp;

        return $this;
    }
}
