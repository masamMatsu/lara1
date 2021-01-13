@extends('layouts.helloapp3')

<button id="square_btn" onClick="history.back()">戻る</button>

@section('content')
   <form action="/company/remove" method="post">
   <table>
      @csrf
      <input type="hidden" name="goods_id" value="{{$item->goods_id}}">
      <tr><th>品名: </th><td>{{$item->goods_name}}</td></tr>
      <tr><th>カテゴリー１: </th><td>{{$item->category1}}</td></tr>
      <tr><th>カテゴリー２: </th><td>{{$item->category2}}</td></tr>
      <tr><th>サイズ: </th><td>{{$item->size}}</td></tr>
      <tr><th>カラー: </th><td>{{$item->color}}</td></tr>
      <tr><th>性別: </th><td>{{$item->sex}}</td></tr>
      <tr><th>企業ID: </th><td>{{$item->company_id}}</td></tr>
      <tr><th></th><td><input type="submit" value="削除"></td></tr>
   </table>
   </form>
@endsection
