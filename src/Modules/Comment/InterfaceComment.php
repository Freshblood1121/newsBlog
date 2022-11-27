<?php

namespace App\Modules\Comment;

use App\Contracts\a\AddInterface;

class InterfaceComment implements AddInterface
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
