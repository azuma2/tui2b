<?php

namespace App\Http\Controllers;

use App\Models\Tui2;
use App\Models\Come2;
use App\Models\Like;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class RepliesController extends Controller
{
  // only()の引数内のメソッドはログイン時のみ有効
 // public function __construct()
 // {
//    $this->middleware(['auth', 'verified'])->only(['like', 'unlike']);
//  }



 /**
  * 引数のIDに紐づくリプライにLIKEする
  *
  * @param $id リプライID
  * @return \Illuminate\Http\RedirectResponse
  */
  public function like($id)
  {
    Like::create([
      'tui2_id' => $id,
 //    'user_id' => Auth::id(),
    ]);

    session()->flash('success', 'You Liked the Reply.');

    return response()->json([
    redirect()->back()
    ], 210);
  }

  /**
   * 引数のIDに紐づくリプライにUNLIKEする
   *
   * @param $id リプライID
   * @return \Illuminate\Http\RedirectResponse
   */
  public function unlike($id)
  {
    $like = Like::where('tui2_id', $id)->where('user_id', Auth::id())->first();
    $like->delete();

    session()->flash('success', 'You Unliked the Reply.');

    return response()->json([
    redirect()->back()
    ], 211);
  }
}