<?php

use App\Modules\Comment\Comment;
use App\Modules\Post\Post;
use App\Modules\User\User;
use Faker\Guesser\Name;

$faker = Faker\Factory::create('ru_RU');

//Заготовки
$name = new Name(
    $faker->firstName("female"),
    $faker->lastName("female")
);

$user = new User(
    $faker->randomDigitNotNull,
    $faker->freeEmail,
    $name
);

$post = new Post(
    $faker->randomDigitNotNull,
    $user,
    $faker->realText(rand(50,100))
);

$route = $argv[1] ?? null;

//Структура запросов
switch (strtolower($route)) {
    case "name":
        echo $name;
        break;
    case "user":
        echo $user;
        break;
    case "post":
        echo $post;
        break;
    case "comment":
        $post = new Post(
            $faker->randomDigitNotNull,
            $user,
            $faker->realText(rand(50,100))
        );
        $comment = new Comment(
            $faker->randomDigitNotNull,
            $user,
            $post,
            $faker->realText(rand(10,40))
        );
        echo $comment;
        break;
    default:
        echo "Error try User, Post, Comment parametr";
}