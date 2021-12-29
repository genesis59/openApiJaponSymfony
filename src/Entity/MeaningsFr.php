<?php

namespace App\Entity;

use App\Repository\MeaningsFrRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MeaningsFrRepository::class)]
class MeaningsFr
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $meaningFr;

    #[ORM\ManyToOne(targetEntity: Kanji::class, inversedBy: 'meaningsFrList')]
    #[ORM\JoinColumn(nullable: false)]
    private $kanji;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMeaningFr(): ?string
    {
        return $this->meaningFr;
    }

    public function setMeaningFr(string $meaningFr): self
    {
        $this->meaningFr = $meaningFr;

        return $this;
    }

    public function getKanji(): ?Kanji
    {
        return $this->kanji;
    }

    public function setKanji(?Kanji $kanji): self
    {
        $this->kanji = $kanji;

        return $this;
    }
}
