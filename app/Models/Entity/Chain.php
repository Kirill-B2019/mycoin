<?php

namespace App\Models\Entity;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chain extends Model
{
    use HasFactory;
    private array $blocks;

    public function __construct(array $blocks)
    {
        $this->blocks = $blocks;
    }

    public function getBlocks(): array
    {
        return $this->blocks;
    }

    public function updateBlocks(array $blocks): self
    {
        $this->blocks = $blocks;
        return $this;
    }
}
