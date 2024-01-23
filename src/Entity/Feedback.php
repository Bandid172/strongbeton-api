<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\FeedbackRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Attribute\Groups;

#[ORM\Entity(repositoryClass: FeedbackRepository::class)]
#[ApiResource(
    normalizationContext: ['groups' => ['feedback:read']],
    denormalizationContext: ['groups' => ['feedback:write']],
)]
class Feedback
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups(['feedback:read'])]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Groups(['feedback:read','feedback:write'])]
    private ?string $name = null;

    #[ORM\Column(type: Types::TEXT)]
    #[Groups(['feedback:read','feedback:write'])]
    private ?string $text = null;

    #[ORM\ManyToOne]
    #[Groups(['feedback:read','feedback:write'])]
    private ?MediaObject $picture = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getText(): ?string
    {
        return $this->text;
    }

    public function setText(string $text): static
    {
        $this->text = $text;

        return $this;
    }

    public function getPicture(): ?MediaObject
    {
        return $this->picture;
    }

    public function setPicture(?MediaObject $picture): static
    {
        $this->picture = $picture;

        return $this;
    }
}
