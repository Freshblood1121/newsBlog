<?php

//Подключаем файлы, классы
//use App\Blog\Comment;
use App\Modules\Post\Post;
use App\Modules\User\User;
use App\Repositories\InMemoryUsersRepository;
use Faker\Guesser\Name;

//Файл подключения(контроллер)

include __DIR__ . '/vendor/autoload.php';

$usersRepository = new InMemoryUsersRepository();

$faker = Faker\Factory::create('ru_RU');

$name = new Name(
    $faker->firstName("female"),
    $faker->lastName()
);

$user = new User(
    $faker->randomDigitNotNull,
    $name,
    $faker->sentence(1)
);

$route = $argv[1] ?? null;

switch ($route) {
    case "user":
        echo $user;
        break;
    case "post":
        $post = new Post(
            $faker->randomDigitNotNull,
            $user,
            $faker->realText(rand(50,100))
        );
        echo $post;
        break;
    case "comment":
//        $post = new Post(
//            $faker->randomDigitNotNull,
//            $user,
//            $faker->realText(rand(50,100))
//        );
//        $comment = new Comment(
//            $faker->randomDigitNotNull,
//            $user,
//            $post,
//            $faker->realText(rand(10,40))
//        );
//        echo $comment;
        break;
    default:
        echo "Error try User, Post, Comment parametr";
}