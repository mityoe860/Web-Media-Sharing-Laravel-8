<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {

        $title = '';
        if (request('genre')) {
            $genre = Genre::firstWhere('slug', request('genre'));
            $title = $genre->name;
        }
        return view('animelist', [
            "title" => "Anime List " . $title,
            "genres" => Genre::orderBy('name', 'asc')->get(),
            "posts" => Post::latest()->filter(request(['search', 'genre']))->paginate(5)->withQueryString(),
            "listgenre" => Genre::orderBy('name', 'asc')->get()
        ]);
    }
    // public function genre(Genre $genre)
    // {
    //     return view('animelist', [
    //         'title' => "post by genre : $genre->name",
    //         'posts' => $genre->Posts,
    //         'genre' => $genre->name

    //     ]);
    // }
    public function show(Post $post)
    {
        return view('post', [
            "title" => $post->title,
            "post" => $post,
            "genres" => Genre::orderBy('name', 'asc')->get(),
            "listgenre" => Genre::orderBy('name', 'asc')->get()

        ]);
    }
}
