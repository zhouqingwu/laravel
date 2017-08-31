<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;

class Task extends Model
{

    public function scopeIncomplete($query)
    {
    	return $query->where('completed', 0);
    }

    public function comments()
    {
    	return $this->hasMany(Comment::class);
    }

    public function addComment($body)
    {
        $this->comments()->create(compact('body'));
    } 

}
