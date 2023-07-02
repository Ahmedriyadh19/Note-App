<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function createPost(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);


        $inComingData = [
            'title' => strip_tags($validatedData['title']),
            'content' => strip_tags($validatedData['content']),
            'user_id' => auth()->user()->id,
        ];


        Post::create($inComingData);


        return redirect()->route('HomeView');
    }
}
