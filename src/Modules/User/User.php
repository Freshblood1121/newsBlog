<?php

namespace App\Modules\User;

use Faker\Guesser\Name;

class User
{
    public function __construct(
        private int $id,
        private string $username,
        private Name $login
    ) {
    }

    public function __toString(): string
    {
        return "Пользователь $this->id" . PHP_EOL . "Почта: " . $this->username . PHP_EOL . "Логин: " . $this->login . PHP_EOL;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * @param string $username
     */
    public function setUsername(string $username): void
    {
        $this->username = $username;
    }

    /**
     * @return Name
     */
    public function getLogin(): Name
    {
        return $this->login;
    }

    /**
     * @param Name $login
     */
    public function setLogin(Name $login): void
    {
        $this->login = $login;
    }

}