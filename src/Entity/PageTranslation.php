<?php

namespace App\Entity;

use App\Entity\Common\IdTrait;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\PageTranslationRepository;
use Knp\DoctrineBehaviors\Model\Translatable\TranslationTrait;
use Knp\DoctrineBehaviors\Contract\Entity\TranslationInterface;

#[ORM\Entity(repositoryClass: PageTranslationRepository::class)]
class PageTranslation implements TranslationInterface
{
    use IdTrait;
    use TranslationTrait;

    #[ORM\Column(length: 255)]
    private ?string $title = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $description = null;

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }
}
