<?php

namespace App\Http\Controllers;

use App\Models\Tui2;
use App\Models\Come2;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Tui2Controller extends Controller
{
    public function index()
    {
        $items = Tui2::all();
        $comments = Come2::all();
        return response()->json([
        view('index', ['items' => $items,'comments' => $comments])
        ], 201);
    }

    public function create(Request $request)
    {
        $param = [
            'name' => $request->name,
            'content' => $request->content,

            
    
                ];
        $this->validate($request, Tui2::$rules);

        DB::insert('insert into tui2s (name,content) values (:name,:content)', $param);
        return  response()->json([
        redirect('/')
        ], 202);
    }

    public function update(Request $request)
    {
         $param = [
            'id' => $request->id,
            'name' => $request->name,
            'content' => $request->content,
            
        ];
        $this->validate($request, Tui2::$rules);
        DB::update('update tui2s set name =:name, content =:content where id =:id', $param);
        return response()->json([
        redirect('/')
        ], 203);
    }

    public function remove(Request $request)
    {
        $param = ['id' => $request->id];
        DB::delete('delete from tui2s where id =:id', $param);
        return response()->json([
        redirect('/')
        ], 200);
    }




    public function create2(Request $request)
    {
        $param = [
            'name2' => $request->name2,
            'content2' => $request->content2,
            'user_id' => '1', // 適当な値で設定
        'tui2_id' => '1' // 適当な値で設定
            
                ];
        $this->validate($request, Come2::$rules);

         DB::insert('insert into come2s (name2,content2,user_id,tui2_id) values (:name2,:content2,:user_id,:tui2_id)', $param); // user_id と tui2_id をinsert 文に追加
        return response()->json([
        redirect('/')
        ], 200);
    }




    public function index2()
    {
        //表示させたいviewを指定させる
        return response()->json([
        view('comment', ['items' => $items])
        ], 200);
    }

        public function index3()
    {
        $items = Tui2::all();
        $items = DB::select('select * from tui2s');
        
        return response()->json([
        view('comment', ['items' => $items])
        ], 200);
    }

    public function index4()
    {
        $items = Tui2::all();
        $items = DB::select('select * from tui2s');

        //表示させたいviewを指定させる
        return response()->json([
        view('come', ['items' => $items])
        ], 200);
    }
    public function index5()
    {
        
        $comments = Come2::all();
        $items = Tui2::all();
        
        
        return response()->json([
        view('come', ['items' => $items,'comments' => $comments])
        ], 200);
    }




}


