<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tui2 extends Model

{
        use HasFactory;

    protected $fillable = ['content'];
    protected $table = 'tui2s';

    public static $rules = array(
        'name' => 'required|max:20',
        'content' => 'required|max:20',
    );
    
    public function user(){ 
        return $this->belongsTo('App\Models\user');
    }

    
  public function likes()
  {
    return $this->hasMany(Like::class, 'tui2_id');
  }

   /**
  * リプライにLIKEを付いているかの判定
  *
  * @return bool true:Likeがついてる false:Likeがついてない
  */
  public function is_liked_by_auth_user()
  {
    $id = Auth::id();

    $likers = array();
    foreach($this->likes as $like) {
      array_push($likers, $like->user_id);
    }

    if (in_array($id, $likers)) {
      return true;
    } else {
      return false;
    }
  }
}


