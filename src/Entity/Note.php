<?php

declare(strict_types=1);

namespace App\Entity;

use App\Traits\ArrayOrJsonResponse;

final class Note
{
    use ArrayOrJsonResponse;

    private int $id;

    private string $name;

    private ?string $description;

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function updateName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function updateDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }
}
