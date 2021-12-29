<?php

namespace App\Entity;

use App\Repository\ReadingsOnRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ReadingsOnRepository::class)]
class ReadingsOn
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $readingOn;

    #[ORM\ManyToOne(targetEntity: Kanji::class, inversedBy: 'readingsOnList')]
    #[ORM\JoinColumn(nullable: false)]
    private $kanji;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getReadingOn(): ?string
    {
        return $this->readingOn;
    }

    public function setReadingOn(string $readingOn): self
    {
        $this->readingOn = $readingOn;

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
