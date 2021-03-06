<?php
namespace App\Models;

use App\Models\Like;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;




class Like extends Model
{
  // 配列内の要素を書き込み可能にする
  protected $fillable = ['tui2_id','user_id'];

  public function reply()
  {
    return $this->belongsTo(Tui2::class);
  }

  public function user()
  {
    return $this->belongsTo(User::class);
  }
}

