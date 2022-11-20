<?php

namespace App\Modules\Comment;

use App\Contracts\addInterface;

class interfaceComment implements addInterface
{
    public function __toString(): string
    {
        return $this->user . 'Пишет комментарий: ' . $this->text;
    }
    public function getId(): int
    {
        return $this->id;
    }
}