<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Jissyu5_3Controller extends Controller
{
    public function index(Request $request)
    {
        $items = DB::table('people')->get();
        return view('jissyu5_3.index', ['items' => $items]);
    }
    public function show(Request $request)
    {
        $id = $request->id;
        $item = DB::table('people')->where('id', $id)->first();
        return view('jissyu5_3.show', ['item' => $item]);
    }

    public function add(Request $request)
    {
        return view('jissyu5_3.add');
    }

    public function create(Request $request)
    {
        $param = [
            'name' => $request->name,
            'mail' => $request->mail,
            'age' => $request->age,
        ];
        DB::table('people')->insert($param);
        return redirect('/jissyu12');
    }
    public function edit(Request $request)
    {
        $item = DB::table('people')
        ->where('id', $request->id)->first();
        return view('jissyu5_3.edit', ['item' => $item]);
    }

    public function update(Request $request)
    {
        $param = [
            'name' => $request->name,
            'mail' => $request->mail,
            'age' => $request->age,
        ];
        DB::table('people')
            ->where('id', $request->id)
            ->update($param);
        return redirect('/jissyu12');
    }

    public function del(Request $request)
    {
        $item = DB::table('people')
            ->where('id', $request->id)->first();
        return view('jissyu5_3.del', ['item' => $item]);
    }

    public function remove(Request $request)
    {
        DB::table('people')
        ->where('id', $request->id)->delete();
        return redirect('/jissyu12');
    }
}
