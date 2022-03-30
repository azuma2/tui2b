<?php
namespace App\Models;

use App\Models\Like;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;




class Like extends Model
{
  // 配列内の要素を書き込み可能にする
  protected $fillable = ['reply_id','user_id'];

  public function reply()
  {
    return $this->belongsTo(Reply::classs);
  }

  public function user()
  {
    return $this->belongsTo(User::class);
  }
}

