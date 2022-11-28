<?php

namespace App\Modules\User;

class User implements InterfaceUser
{
    public function __construct(
        protected int $id,
        protected string $username,
        protected string $email
    ) {
    }
     
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
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }
}
