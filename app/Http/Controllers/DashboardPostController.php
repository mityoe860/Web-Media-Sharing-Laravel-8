<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Models\Genre;
use App\Models\genre_post;
use App\Models\Post;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Symfony\Component\Console\Input\Input;

class DashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.posts', [

            'posts' => Post::all(),

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.create', [

            'genres' => Genre::orderBy('name', 'asc')->get(),

        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // insert data many to many cara validasi
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:posts',
            'genre_id' => 'required',
            'body' => 'required',
        ]);
        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerp'] = Str::limit(strip_tags($request->body), 200);
        Post::create($validatedData)->genre()->attach($request->genre_id);

        // insert data many to many tanpa validasi
        // $post = new Post;
        // $post->title = $request->title;
        // $post->slug = $request->slug;
        // $post->body = $request->body;
        // $post['user_id'] = auth()->user()->id;
        // $post['excerp'] = Str::limit(strip_tags($request->body), 200);
        // $post->save();
        // $post->genre()->attach($request->genre_id);

        return redirect('/dashboard/posts')->with('success', 'Post baru berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('dashboard.show', [

            'post' => $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('dashboard.edit', [
            'post' => $post,
            'posts' => Post::all(),
            'genres' => Genre::all(),
            
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $rules = [
            'title' => 'required|max:255',
            'genre_id' => 'required',
            'body' => 'required',
        ];
        if ($request->slug != $post->slug) {
            $rules['slug'] = 'required|unique:posts';
        }
        $validatedData = $request->validate($rules);
        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerp'] = Str::limit(strip_tags($request->body), 200);
        Post::findOrFail($post->id)->update($validatedData);
        return redirect('/dashboard/posts')->with('success', 'Post berhasil diedit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        Post::destroy($post->id);
        return redirect('/dashboard/posts')->with('success', 'Post berhasil dihapus!');
    }
    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Post::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}
