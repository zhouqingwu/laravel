<?php

namespace App;

use Carbon\Carbon;

class Post extends Model
{
    public function discusses()
    {
        return $this->hasMany(Discuss::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }    

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }    

    public function addDiscuss($body)
    {
        // Discuss::create([
        //     'post_id' => $this->id,
        //     'body' => $body
        // ]);
        $this->discusses()->create(compact('body'));
    }

    /**
     * [scopeFilter description
     * filter querys for post
     * @param  [type] $query   [description]
     * @param  [type] $filters [description]
     * @return [type]          [description]
     */
    public function scopeFilter($query, $filters)
    {
        if ($month = $filters['month']) {
            $query->whereMonth('created_at', Carbon::parse($month)->month);
        }

        if ($year = $filters['year']) {
            $query->whereYear('created_at', Carbon::parse($year)->year);
        }
    }

    /**
     * return archives by month and year
     * @return [type] [description]
     */
    public static function archives()
    {
        return static::selectRaw('year(created_at) year, monthname(created_at) month, count(*) published')->groupBy('year', 'month')->orderByRaw('min(created_at) desc')->get()->toArray();
    }
}
