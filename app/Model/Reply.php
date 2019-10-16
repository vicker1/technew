<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Question;
use App\Model\User;

class Reply extends Model
{
    protected $guarded = [];

    public function question()
    {
        return $this->belongsto(question::class);
    }

    public function user()
    {
        return $this->belongsto(user::class);
    }

    public function like()
    {
        return $this->hasmany(like::class);
    }

}