<?php

namespace App\Modules\User;

use App\Contracts\addInterface;

class interfaceUser implements addInterface
{
    public function __toString(): string
    {
        return "Пользователь $this->id" . PHP_EOL . "Почта: " . $this->username . PHP_EOL . "Логин: " . $this->email . PHP_EOL;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }
}