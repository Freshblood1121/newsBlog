<?php

namespace App\Modules\User;

use Faker\Guesser\Name;

class User
{
    private int $id;
    private string $username;
    private Name $login;

    /**
     * @param int $id
     * @param Name $username
     * @param string $login
     */

    public function __construct(
        int $id,
        string $username,
        Name $login
    ) {
        $this->id = $id;
        $this->username = $username;
        $this->login = $login;
    }

    public function __toString(): string
    {
        return "Пользователь $this->id" . PHP_EOL . "Почта: " . $this->username . PHP_EOL . "Логин: " . $this->login . PHP_EOL;
    }

    /**
     * @return Name
     */
    public function getUsername(): Name
    {
        return $this->username;
    }

    /**
     * @param Name $username
     */
    public function setUsername(Name $username): void
    {
        $this->username = $username;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }
}