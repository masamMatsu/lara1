@extends('layouts.helloapp')

@section('title', 'Image Delete')

@section('menubar')
画像削除
   @parent
@endsection

@section('content')
   <form action="/image_remove" method="post">
   <table>
      @csrf
      <input type="hidden" name="product_id" value="{{$item->product_id}}">
      <tr><th>image: </th><img src="{{$item->path}}" width="200" height="130"></tr>
      <tr><th>name: </th><td>{{$item->product_name}}</td></tr>
      <tr><th></th><td><input type="submit" value="削除"></td></tr>
   </table>
   </form>
@endsection

@section('footer')
copyright 2020 MasayaMatsumiya.
@endsection
