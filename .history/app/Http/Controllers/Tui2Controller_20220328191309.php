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


            $articles = [
        ['id' => 1, 'title' => 'title1', 'data' => 'data1'],
        ['id' => 2, 'title' => 'title2', 'data' => 'data2'],
        ['id' => 3, 'title' => 'title3', 'data' => 'data3'],
    ];
        
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




}