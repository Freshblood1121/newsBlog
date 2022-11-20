<?php

namespace App\Modules\Post;

use App\Contracts\addInterface;
use App\Modules\Comment\interfaceComment;
use App\Modules\User\User;

class Post extends interfacePost
{
    public function __construct(
        protected int $id,
        protected User $user,
        protected string $text
    ) {
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