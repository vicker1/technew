<?php

namespace App\Http\Controllers;

use App\model\Like;
use Illuminate\Http\Request;

class LikeController extends Controller
{
 
    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('JWT');
    }

  public function likeit(Reply $reply)
  {
    $reply->like()->create([
        //  'user_id' => auth()->id()
        'user_id' => '1'
    ]);
  }
  public function unlikeit(Reply $reply)
  {
    //$reply->like()->where(['user_id',auth()->id()])->first()->delete();
    $reply->like()->where('user_id','1')->first()->delete();
  }

}
