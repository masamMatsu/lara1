@extends('layouts.helloapp3')

<button id="square_btn" onClick="history.back()">戻る</button>

@if (count($errors) > 0)
<div>
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif


   <form action="create" method="post" enctype="multipart/form-data" id="form">


   <table>
      @csrf
    <tr><th>品番: </th><td><input type="text" name="goods_id" value="{{old('goods_id')}}"></td></tr>

    ファイル：<input type="file" name="imagefile"/><br>


    名称：<input type="text" name="image_name" /><br>


    <tr><th>品名: </th><td><input type="text" name="goods_name" value="{{old('goods_name')}}"></td></tr>

    <tr><th>カテゴリー１: </th><td><input type="text" name="category1" value="{{old('catagory1')}}"></td></tr>

    <tr><th>カテゴリー２: </th><td><input type="text" name="category2" value="{{old('category2')}}"></td></tr>

    <tr><th>サイズ: </th><td><input type="text" name="size" value="{{old('size')}}"></td></tr>

    <tr><th>カラー: </th><td><input type="text" name="color" value="{{old('color')}}"></td></tr>

    <tr><th>性別: </th><td><input type="text" name="sex" value="{{old('sex')}}"></td></tr>

    <tr><th>企業ID: </th><td><input type="text" name="company_id" value="{{old('company_id')}}"></td></tr>

    <tr><th></th><td><input type="submit" value="新規登録"></td></tr>
   </table>
   </form>

   