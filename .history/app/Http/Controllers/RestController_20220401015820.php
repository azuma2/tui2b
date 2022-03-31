<?php
class RestController extends Controller
{
  $items = Rest::all();
return response()->json([
    'data' => $items
], 200);
}