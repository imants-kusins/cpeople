<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\LeagueRepository")
 */
class League
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Team", mappedBy="league_id")
     */
    private $league_id;

    public function __construct()
    {
        $this->league_id = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Collection|Team[]
     */
    public function getLeagueId(): Collection
    {
        return $this->league_id;
    }

    public function addLeagueId(Team $leagueId): self
    {
        if (!$this->league_id->contains($leagueId)) {
            $this->league_id[] = $leagueId;
            $leagueId->setLeagueId($this);
        }

        return $this;
    }

    public function removeLeagueId(Team $leagueId): self
    {
        if ($this->league_id->contains($leagueId)) {
            $this->league_id->removeElement($leagueId);
            // set the owning side to null (unless already changed)
            if ($leagueId->getLeagueId() === $this) {
                $leagueId->setLeagueId(null);
            }
        }

        return $this;
    }
}
