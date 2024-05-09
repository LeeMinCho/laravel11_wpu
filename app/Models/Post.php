<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
    public static function all()
    {
        return [
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
    }

    public static function find($slug): array
    {
        /* return Arr::first(static::all(), function ($post) use ($slug) {
            return $post['slug'] == $slug;
        }); */
        $post =  Arr::first(static::all(), fn ($post) => $post['slug'] == $slug);
        if (!$post) {
            abort(404);
        }
        return $post;
    }
}
