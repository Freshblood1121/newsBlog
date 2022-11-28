<?php

namespace App\Modules\Post;

use App\Contracts\AddInterface;

interface InterfacePost implements AddInterface
{
    public function __toString(): string
    {
        return $this->user . 'Пишет пост: ' . $this->text;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }
}
