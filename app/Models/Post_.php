<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Esto TN",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae iste sit nisi earum dolor labore tenetur, asperiores hic deserunt facilis sed odit minus officiis necessitatibus, vero culpa beatae aspernatur est! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae iste sit nisi earum dolor labore tenetur, asperiores hic deserunt facilis sed odit minus officiis necessitatibus, vero culpa beatae aspernatur est! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae iste sit nisi earum dolor labore tenetur, asperiores hic deserunt facilis sed odit minus officiis necessitatibus, vero culpa beatae aspernatur est!"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Doddy Ferdiansyah",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae iste sit nisi earum dolor labore tenetur, asperiores hic deserunt facilis sed odit minus officiis necessitatibus, vero culpa beatae aspernatur est! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae iste sit nisi earum dolor labore tenetur, asperiores hic deserunt facilis sed odit minus officiis necessitatibus, vero culpa beatae aspernatur est! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae iste sit nisi earum dolor labore tenetur, asperiores hic deserunt facilis sed odit minus officiis necessitatibus, vero culpa beatae aspernatur est!"
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find(string $slug){
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
