@extends('layouts.helloapp')

@section('title', 'ユーザ情報削除')

@section('menubar')
ユーザ情報削除
   @parent
@endsection

@section('content')
   <form action="/jissyu12/remove" method="post">
   <table>
      @csrf
      <input type="hidden" name="id" value="{{$item->id}}">
      <tr><th>name: </th><td>{{$item->name}}</td></tr>
      <tr><th>mail: </th><td>{{$item->mail}}</td></tr>
      <tr><th>age: </th><td>{{$item->age}}</td></tr>
      <tr><th></th><td><input type="submit" value="削除"></td></tr>
   </table>
   </form>
@endsection

@section('footer')
copyright 2020 MasayaMatsumiya.
@endsection
