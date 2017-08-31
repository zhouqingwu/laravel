<?php

namespace App\Http\Controllers;

use App\Task;
use App\Comment;

class CommentsController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Task $task)
    {

        $this->validate(request(), [
            'body' => 'required|max:50|min:5'
        ]);

        $task->addComment(request('body'));
        // Comment::create([
        //     'body' => request('body'),
        //     'task_id' => $task->id
        // ]);

        return back();
    }

}
