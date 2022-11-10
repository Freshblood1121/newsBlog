<?php

namespace App\Modules\Post;

use App\Contracts\addInterface;
use App\Modules\User\User;

class Post implements addInterface
{
    public function __construct(
        private int $id,
        private User $user,
        private string $text
    ) {
    }

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

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return User
     */
    public function getUser(): User
    {
        return $this->user;
    }

    /**
     * @param User $user
     */
    public function setUser(User $user): void
    {
        $this->user = $user;
    }

    /**
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }

    /**
     * @param string $text
     */
    public function setText(string $text): void
    {
        $this->text = $text;
    }
}