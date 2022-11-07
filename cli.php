<?php

//Файл подключения(контроллер)
use App\Repositories\InMemoryUsersRepository;

include __DIR__ . '/vendor/autoload.php';

$usersRepository = new InMemoryUsersRepository();

require __DIR__ . '/src/Structure/fakeStructure.php';