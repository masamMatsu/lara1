@extends('layouts.helloapp3')

<button class="click1" onclick="location.href='/company3'">戻る</button><br>

@section('content')
@if (count($errors) > 0)
<div>
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
   <form action="/company/update" method="post">
   <table>
      @csrf
      <input type="hidden" name="goods_id" value="{{$item->goods_id}}">

      <tr><th>品名: </th><td><input type="text" name="goods_name"
         value="{{$item->goods_name}}"></td></tr>

      <tr><th>カテゴリー１: </th><td><input type="text" name="category1"
         value="{{$item->category1}}"></td></tr>

      <tr><th>カテゴリー２: </th><td><input type="text" name="category2"
         value="{{$item->category2}}"></td></tr>

      <tr><th>サイズ: </th><td><input type="text" name="size"
      value="{{$item->size}}"></td></tr>

      <tr><th>カラー: </th><td><input type="text" name="color"
      value="{{$item->color}}"></td></tr>

      <tr><th>性別: </th><td><input type="text" name="sex"
      value="{{$item->sex}}"></td></tr>

      <tr><th>企業ID: </th><td><input type="number" name="company_id"
      value="{{$item->company_id}}"></td></tr>

      <tr><th></th><td><input type="submit"
         value="更新"></td></tr>
   </table>
   </form>
@endsection