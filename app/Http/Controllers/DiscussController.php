<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Discuss;

class DiscussController extends Controller
{
    public function store(Post $post)
    {
        // Discuss::create([
        //     'post_id' => $post->id,
        //     'body' => request('body')
        // ]);
        $this->validate(request(), ['body' => 'required|min:2']);
        $post->addDiscuss(request('body'));
        
        return back();
    }
}
