<?php

namespace App\Models;


class Post
{

    private static $anime_posts = [
        [
            "title" => "Naruto",
            "slug" => "naruto",
            "body" => "naaaaaaaaaruuuuuuuuutoooooooooooooo"
        ],
        [
            "title" => "Sasuke",
            "slug" => "sauke",
            "body" => "saaaaaaaaaaaaasuuuuuuuuuuukeeeeeeeeeeeeee"
        ]
    ];

    public static function all()
    {
        return collect(self::$anime_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();

        return $posts->firstWhere('slug', $slug);
    }
}
