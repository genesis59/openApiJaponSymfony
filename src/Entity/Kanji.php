<?php

namespace App\Entity;

use App\Repository\KanjiRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: KanjiRepository::class)]
class Kanji
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 1)]
    private $symbol;

    #[ORM\Column(type: 'smallint')]
    private $strokes;

    #[ORM\ManyToMany(targetEntity: KeyKanji::class, inversedBy: 'kanjis')]
    private $keyKanji;

    #[ORM\OneToMany(mappedBy: 'kanji', targetEntity: MeaningsFr::class, orphanRemoval: true)]
    private $meaningsFrList;

    #[ORM\OneToMany(mappedBy: 'kanji', targetEntity: ReadingsKun::class, orphanRemoval: true)]
    private $readingsKunList;

    #[ORM\OneToMany(mappedBy: 'kanji', targetEntity: ReadingsOn::class, orphanRemoval: true)]
    private $readingsOnList;

    public function __construct()
    {
        $this->keyKanji = new ArrayCollection();
        $this->meaningsFrList = new ArrayCollection();
        $this->readingsKunList = new ArrayCollection();
        $this->readingsOnList = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSymbol(): ?string
    {
        return $this->symbol;
    }

    public function setSymbol(string $symbol): self
    {
        $this->symbol = $symbol;

        return $this;
    }

    public function getStrokes(): ?int
    {
        return $this->strokes;
    }

    public function setStrokes(int $strokes): self
    {
        $this->strokes = $strokes;

        return $this;
    }

    /**
     * @return Collection|KeyKanji[]
     */
    public function getKeyKanji(): Collection
    {
        return $this->keyKanji;
    }

    public function addKeyKanji(KeyKanji $keyKanji): self
    {
        if (!$this->keyKanji->contains($keyKanji)) {
            $this->keyKanji[] = $keyKanji;
        }

        return $this;
    }

    public function removeKeyKanji(KeyKanji $keyKanji): self
    {
        $this->keyKanji->removeElement($keyKanji);

        return $this;
    }

    /**
     * @return Collection|MeaningsFr[]
     */
    public function getMeaningsFrList(): Collection
    {
        return $this->meaningsFrList;
    }

    public function addMeaningsFrList(MeaningsFr $meaningsFrList): self
    {
        if (!$this->meaningsFrList->contains($meaningsFrList)) {
            $this->meaningsFrList[] = $meaningsFrList;
            $meaningsFrList->setKanji($this);
        }

        return $this;
    }

    public function removeMeaningsFrList(MeaningsFr $meaningsFrList): self
    {
        if ($this->meaningsFrList->removeElement($meaningsFrList)) {
            // set the owning side to null (unless already changed)
            if ($meaningsFrList->getKanji() === $this) {
                $meaningsFrList->setKanji(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|ReadingsKun[]
     */
    public function getReadingsKunList(): Collection
    {
        return $this->readingsKunList;
    }

    public function addReadingsKunList(ReadingsKun $readingsKunList): self
    {
        if (!$this->readingsKunList->contains($readingsKunList)) {
            $this->readingsKunList[] = $readingsKunList;
            $readingsKunList->setKanji($this);
        }

        return $this;
    }

    public function removeReadingsKunList(ReadingsKun $readingsKunList): self
    {
        if ($this->readingsKunList->removeElement($readingsKunList)) {
            // set the owning side to null (unless already changed)
            if ($readingsKunList->getKanji() === $this) {
                $readingsKunList->setKanji(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|ReadingsOn[]
     */
    public function getReadingsOnList(): Collection
    {
        return $this->readingsOnList;
    }

    public function addReadingsOnList(ReadingsOn $readingsOnList): self
    {
        if (!$this->readingsOnList->contains($readingsOnList)) {
            $this->readingsOnList[] = $readingsOnList;
            $readingsOnList->setKanji($this);
        }

        return $this;
    }

    public function removeReadingsOnList(ReadingsOn $readingsOnList): self
    {
        if ($this->readingsOnList->removeElement($readingsOnList)) {
            // set the owning side to null (unless already changed)
            if ($readingsOnList->getKanji() === $this) {
                $readingsOnList->setKanji(null);
            }
        }

        return $this;
    }
}
