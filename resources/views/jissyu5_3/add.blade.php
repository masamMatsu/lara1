@extends('layouts.helloapp')

@section('title', 'ユーザ情報新規登録')

@section('menubar')
ユーザ情報新規登録
   @parent
@endsection

@section('content')
   <form action="/jissyu12/create" method="post">
   <table>
      @csrf
      <tr><th>name: </th><td><input type="text" name="name"></td></tr>
      <tr><th>mail: </th><td><input type="text" name="mail"></td></tr>
      <tr><th>age: </th><td><input type="text" name="age"></td></tr>
      <tr><th></th><td><input type="submit" value="新規登録"></td></tr>
   </table>
   </form>
@endsection

@section('footer')
copyright 2020 MasayaMatsumiya.
@endsection
