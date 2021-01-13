<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class HelloController extends Controller
{
    public function index(Request $request)
    {
       $items = DB::select('select * from people');
       return view('hello.index', ['items' => $items]);
    }
    public function other()
    {
       return view('hello.countup');
    }
    public function other2()
    {
       return view('hello.todolist2');
    }
    public function other3()
    {
      $users = User::all()->pluck('name', 'id');
   // プルダウンの一番最初は空欄にしたい時には、先頭に追加しておく
   //   $users = $users -> prepend('', '');
      return view('hello.index2', ['users' => $users]);
    }

}