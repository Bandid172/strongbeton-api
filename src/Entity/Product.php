<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\ProductRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Attribute\Groups;

#[ORM\Entity(repositoryClass: ProductRepository::class)]
#[ApiResource(
    normalizationContext: ['groups' => ['product:read']],
    denormalizationContext: ['groups' => ['product:write']]
)]
class Product
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups(['product:read'])]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Groups(['product:read','product:write'])]
    private ?string $name = null;

    #[ORM\Column(length: 255)]
    #[Groups(['product:read','product:write'])]
    private ?string $price = null;

    #[ORM\ManyToOne]
    #[Groups(['product:read','product:write'])]
    private ?MediaObject $picture = null;

    #[Groups(['product:read','product:write'])]
    #[ORM\Column(type: Types::TEXT)]
    private ?string $text = null;

    #[Groups(['product:read','product:write'])]
    #[ORM\Column(length: 255)]
    private ?string $strength = null;

    #[Groups(['product:read','product:write'])]
    #[ORM\Column(length: 255)]
    private ?string $density = null;

    #[Groups(['product:read','product:write'])]
    #[ORM\Column(length: 255)]
    private ?string $freezeResistance = null;

    #[Groups(['product:read','product:write'])]
    #[ORM\Column(length: 255)]
    private ?string $consistency = null;

    #[Groups(['product:read','product:write'])]
    #[ORM\Column(length: 255)]
    private ?string $waterproofingCapacity = null;

    #[Groups(['product:read','product:write'])]
    #[ORM\Column(length: 255)]
    private ?string $gost = null;

    #[Groups(['product:read','product:write'])]
    #[ORM\Column(type: Types::ARRAY)]
    private array $requiredMaterials = [];

    #[Groups(['product:read','product:write'])]
    #[ORM\Column(type: Types::ARRAY)]
    private array $reccomendations = [];

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

    public function getPrice(): ?string
    {
        return $this->price;
    }

    public function setPrice(string $price): static
    {
        $this->price = $price;

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

    public function getText(): ?string
    {
        return $this->text;
    }

    public function setText(string $text): static
    {
        $this->text = $text;

        return $this;
    }

    public function getStrength(): ?string
    {
        return $this->strength;
    }

    public function setStrength(string $strength): static
    {
        $this->strength = $strength;

        return $this;
    }

    public function getDensity(): ?string
    {
        return $this->density;
    }

    public function setDensity(string $density): static
    {
        $this->density = $density;

        return $this;
    }

    public function getFreezeResistance(): ?string
    {
        return $this->freezeResistance;
    }

    public function setFreezeResistance(string $freezeResistance): static
    {
        $this->freezeResistance = $freezeResistance;

        return $this;
    }

    public function getConsistency(): ?string
    {
        return $this->consistency;
    }

    public function setConsistency(string $consistency): static
    {
        $this->consistency = $consistency;

        return $this;
    }

    public function getWaterproofingCapacity(): ?string
    {
        return $this->waterproofingCapacity;
    }

    public function setWaterproofingCapacity(string $waterproofingCapacity): static
    {
        $this->waterproofingCapacity = $waterproofingCapacity;

        return $this;
    }

    public function getGost(): ?string
    {
        return $this->gost;
    }

    public function setGost(string $gost): static
    {
        $this->gost = $gost;

        return $this;
    }

    public function getRequiredMaterials(): array
    {
        return $this->requiredMaterials;
    }

    public function setRequiredMaterials(array $requiredMaterials): static
    {
        $this->requiredMaterials = $requiredMaterials;

        return $this;
    }

    public function getReccomendations(): array
    {
        return $this->reccomendations;
    }

    public function setReccomendations(array $reccomendations): static
    {
        $this->reccomendations = $reccomendations;

        return $this;
    }
}
