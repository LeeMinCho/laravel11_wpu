<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;

Route::get('/', function () {
    return view('home', ['title' => 'Home']);
});

$posts = [
    [
        'id' => 1,
        'slug' => 'judul-artikel-1',
        'title' => 'Judul Artikel 1',
        'author' => 'Eka Yunan',
        'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aut possimus eum earum tempora exercitationem quaerat voluptate voluptatibus repellendus debitis explicabo rerum dicta, et atque, libero error! Magni atque id velit!'
    ],
    [
        'id' => 2,
        'slug' => 'judul-artikel-2',
        'title' => 'Judul Artikel 2',
        'author' => 'Eka Yunan',
        'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque temporibus, soluta voluptates alias necessitatibus quod ullam deserunt provident omnis maxime officiis? Minus inventore voluptatum ab ducimus earum dolorum molestiae odio?'
    ],
];
Route::get('/posts', function () use ($posts) {
    return view('posts', ['title' => 'Blog', 'posts' => $posts]);
});

Route::get('/posts/{slug}', function ($slug) use ($posts) {
    $post = Arr::first($posts, function ($post) use ($slug) {
        return $post['slug'] == $slug;
    });

    return view('post', ['title' => $post['title'], 'post' => $post]);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About']);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
