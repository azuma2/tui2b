<?php
class RepliesController extends Controller
{
  // only()の引数内のメソッドはログイン時のみ有効
  public function __construct()
  {
    $this->middleware(['auth', 'verified'])->only(['like', 'unlike']);
  }
