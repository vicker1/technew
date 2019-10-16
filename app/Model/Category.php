<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Category;

class Category extends Model
{
    protected $guarded = [];
    
   public function getroutekeyName()
   {

       return 'slug';
   }
}
