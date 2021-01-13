@extends('layouts.helloapp')

@section('title', 'ユーザ情報一覧')

@section('menubar')
ユーザ情報一覧
   @parent
@endsection

@section('content')
   <a href="/jissyu12/add">新規登録</a>
   <table>
   <tr><th>Name</th><th>Mail</th><th>Age</th><th>Select</th><th>Update</th><th>Delete</th></tr>
   @foreach ($items as $item)
       <tr>
           <td>{{$item->name}}</td>
           <td><a href="{{$item->mail}}">{{$item->mail}}</a></td>
           <td>{{$item->age}}</td>
           <td><a href="/jissyu12/show?id={{$item->id}}">詳細</a></td>
           <td><a href="/jissyu12/edit?id={{$item->id}}">更新</a></td>
           <td><a href="/jissyu12/del?id={{$item->id}}">削除</a></td>
       </tr>
   @endforeach
   </table>
@endsection

@section('footer')
copyright 2020 MasayaMatsumiya.
@endsection
