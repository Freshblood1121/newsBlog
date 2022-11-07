<?php

namespace App\Modules\User;

use Faker\Guesser\Name;

class User
{
    private int $id;
    private Name $username;
    private string $login;
    /**
     * @param int $id
     * @param Name $username
     * @param string $login
     */
    public function __construct(
        int $id,
        Name $username,
        string $login
    ) {
        $this->id = $id;
        $this->username = $username;
        $this->login = $login;
    }

    public function __toString(): string
    {
        return "Пользователь $this->id c именем $this->username и логином $this->login" . PHP_EOL;
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