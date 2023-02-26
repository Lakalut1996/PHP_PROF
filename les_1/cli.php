<?php
//spl_autoload_register("load");

// function load($className)
// {
//     $file = $className . ".php";
//     $file = str_replace('GeekBrains\\Borsh\\', "", $file); // Убираем Мою фамилию из виртуального пути
//     $file = str_replace('\\', DIRECTORY_SEPARATOR, $file); // Либо так: $file = str_replace("\\", "/", $file);
//     if (file_exists($file)) {
//         include $file;
//     }
// }

use GeekBrains\Borsh\Person\User;
use GeekBrains\Borsh\Blog\{Post, Comment};

include_once "random_name.php";

require_once __DIR__ . '/vendor/autoload.php';

foreach ($argv as $key => $value) {
    switch ($value) {
        case 'user':
            $user = new User(1, randomName("name"), randomName("last_name"));
            break;
        case 'post':
            $user = new Post(1, 1, "we", "ewqew");
            break;
        case 'comment':
            $comment = new Comment(1, 1, 1, "df");
            break;
    }
}
// $post = new Post(1, 2, "w", "q");
// print_r($post);
// echo ($post);
