<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Question;
use App\Model\User;
class Question extends Model
{
    

        public function getRouteKeyName()
    
         { 
            return 'slug';
        }
        
       //protected $fillable = ['title','slug', 'body', 'category_id', 'user_id'];
    protected $guarded = [];

    
    public function User()
    {
        return $this->belongsTo(User::class);
    }

    public function replies()
    {
        return $this->hasmany(reply::class);
    }

    public function category()
    {
        return $this->belongsTo(category::class);
    }

    public function getpathAttribute()
    {
        return asset("api/question/$this->slug");
    }
}

//public function getRouteKeyName()

    // {
      //  return 'slug';
    //}

    //protected $fillable = ['title','slug', 'body', 'category_id', 'user_id'];
    //protected $guarded = [];

