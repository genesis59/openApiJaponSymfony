<?php

namespace App\Entity;

use App\Repository\KeyKanjiRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: KeyKanjiRepository::class)]
class KeyKanji
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 1)]
    private $symbolKey;

    #[ORM\Column(type: 'string', length: 30)]
    private $nameKey;

    #[ORM\Column(type: 'smallint')]
    private $keyNumber;

    #[ORM\Column(type: 'smallint')]
    private $strokes;

    #[ORM\ManyToMany(targetEntity: Kanji::class, mappedBy: 'keyKanji')]
    private $kanjis;

    public function __construct()
    {
        $this->kanjis = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSymbolKey(): ?string
    {
        return $this->symbolKey;
    }

    public function setSymbolKey(string $symbolKey): self
    {
        $this->symbolKey = $symbolKey;

        return $this;
    }

    public function getNameKey(): ?string
    {
        return $this->nameKey;
    }

    public function setNameKey(string $nameKey): self
    {
        $this->nameKey = $nameKey;

        return $this;
    }

    public function getKeyNumber(): ?int
    {
        return $this->keyNumber;
    }

    public function setKeyNumber(int $keyNumber): self
    {
        $this->keyNumber = $keyNumber;

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
     * @return Collection|Kanji[]
     */
    public function getKanjis(): Collection
    {
        return $this->kanjis;
    }

    public function addKanji(Kanji $kanji): self
    {
        if (!$this->kanjis->contains($kanji)) {
            $this->kanjis[] = $kanji;
            $kanji->addKeyKanji($this);
        }

        return $this;
    }

    public function removeKanji(Kanji $kanji): self
    {
        if ($this->kanjis->removeElement($kanji)) {
            $kanji->removeKeyKanji($this);
        }

        return $this;
    }
}
