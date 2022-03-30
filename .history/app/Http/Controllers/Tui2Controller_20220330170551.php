<?php

namespace App\Http\Controllers;

use App\Models\Tui2;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Tui2Controller extends Controller
{
    public function index()
    {
        $items = Tui2::all();
        $items = DB::select('select * from tui2s');


        
        return view('index', ['items' => $items]);
    }

    public function create(Request $request)
    {
        $param = [
            'name' => $request->name,
            'content' => $request->content,
            
    
                ];
        $this->validate($request, Tui2::$rules);

        DB::insert('insert into tui2s (name,content) values (:name,:content)', $param);
        return redirect('/');
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
        return redirect('/');
    }

    public function remove(Request $request)
    {
        $param = ['id' => $request->id];
        DB::delete('delete from tui2s where id =:id', $param);
        return redirect('/');
    }




    public function create2(Request $request)
    {
        $param = [
            'name2' => $request->name2,
            'content2' => $request->content2,
            
                ];
        $this->validate($request, Tui2::$rules);

        DB::insert('insert into tui2s (name2,content2) values (:name2,:content2)', $param);
        return redirect('/');
    }




    public function index2()
    {
        //表示させたいviewを指定させる
        return view('comment', ['items' => $items]);
    }

        public function index3()
    {
        $items = Tui2::all();
        $items = DB::select('select * from tui2s');
        
        return view('comment', ['items' => $items]);
    }

    public function index4()
    {
        //表示させたいviewを指定させる
        return view('come', ['items' => $items]);
    }
    public function index5()
    {
        $items = Com2::all();
        
        return view('come', ['items' => $items]);
    }




}


