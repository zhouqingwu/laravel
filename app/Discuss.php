<?php

namespace App;

class Discuss extends Model
{
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
