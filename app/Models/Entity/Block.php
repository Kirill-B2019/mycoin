<?php

namespace App\Models\Entity;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Block extends Model
{
    use HasFactory;
    private int $index;
    private string $hash;
    private string $previousHash;
    private  int $timestamp;
    private string $data;
    public function __construct(int $index, string $previousHash, string $data)
    {
       $this->index = $index;
       $this->previousHash = $previousHash;
       $this->data = $data;
       $this->timestamp = time();
    }


    public function setHash(string $hash): self
    {
        $this->hash = $hash;
        return $this;
    }

    public function getIndex(): int
    {
        return $this->index;
    }

    public function getHash(): string
    {
        return $this->hash;
    }

    public function getPreviousHash(): string
    {
        return $this->previousHash;
    }

    public function getTimeStamp(): int
    {
        return $this->timestamp;
    }

    public function getData(): string
    {
        return $this->data;
    }
}
