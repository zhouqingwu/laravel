<?php

namespace App;

class Post extends Model
{
    public function discusses()
    {
        return $this->hasMany(Discuss::class);
    }
}
