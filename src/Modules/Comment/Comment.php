<?php

namespace App\Modules\Comment;

use App\Modules\Post\Post;
use App\Modules\User\User;

class Comment implements InterfaceComment
{
    public function __construct(
        protected int $id,
        protected User $user,
        private Post $post,
        protected string $text
    ) {
    }
    
    public function __toString(): string
    {
        return $this->user . 'Пишет комментарий: ' . $this->text;
    }
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
     * @return Post
     */
    public function getPost(): Post
    {
        return $this->post;
    }

    /**
     * @param Post $post
     */
    public function setPost(Post $post): void
    {
        $this->post = $post;
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
