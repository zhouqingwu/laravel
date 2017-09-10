<?php

namespace App;

class Post extends Model
{
    public function discusses()
    {
        return $this->hasMany(Discuss::class);
    }

    public function addDiscuss($body)
    {
        // Discuss::create([
        //     'post_id' => $this->id,
        //     'body' => $body
        // ]);
        $this->discusses()->create(compact('body'));
    }
}
