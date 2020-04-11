<?php

namespace App\Http\Controllers;

use App\Post;
use Intervention\Image\Facades\Image;


class PostController extends Controller
{
    public function __construct()
    {

        $this->middleware('auth');
    }

    public  function create()
    {

        return  view('posts.create');
    }
    public function store()
    {

        $data =  request()->validate([
            'caption' => 'required',
            'image' => 'required|image',
        ]);

        $imagePaht = request('image')->store('uploads', 'public');
        $image = Image::make(public_path("storage/{$imagePaht}"))->fit(1200, 1200);
        $image->save();
        auth()->user()->posts()->create([

            'caption' => $data['caption'],
            'image' => $imagePaht
        ]);
        return redirect('/Profile/' .  auth()->user()->id);
    }
    public function show($post)
    {
        $post = Post::findOrFail($post);
        return view('posts.show', compact('post'));
    }
}
