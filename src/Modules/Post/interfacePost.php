<?php

namespace App\Modules\Post;

use App\Contracts\addInterface;

class interfacePost implements addInterface
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