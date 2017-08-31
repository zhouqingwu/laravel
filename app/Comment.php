<?php

namespace App;

class Comment extends Model
{
    //
    public function task()
    {
    	return $this->belongsTo('Task');
    	// return $this->belongsTo('Task', 'task_id', 'id');
    }
}
