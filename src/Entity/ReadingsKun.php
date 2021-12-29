<?php

namespace App\Entity;

use App\Repository\ReadingsKunRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ReadingsKunRepository::class)]
class ReadingsKun
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $readingKun;

    #[ORM\ManyToOne(targetEntity: Kanji::class, inversedBy: 'readingsKunList')]
    #[ORM\JoinColumn(nullable: false)]
    private $kanji;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getReadingKun(): ?string
    {
        return $this->readingKun;
    }

    public function setReadingKun(string $readingKun): self
    {
        $this->readingKun = $readingKun;

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
