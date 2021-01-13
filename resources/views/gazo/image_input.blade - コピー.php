@extends('layouts.helloapp')

@section('title', 'Image Input')

@section('menubar')
    画像入力
   @parent
@endsection


@section('content')
    <form action="image_confirm" method="post" enctype="multipart/form-data" id="form">
        @csrf
        ファイル：
        <input type="file" name="imagefile" value=""/><br /><br />
        画像名称：<br />
        <input type="text" name="product_name" size="50" value="{{ old('name') }}"/><br /><br />
        <input type="submit" name="confirm" id="button" value="確認" />
    </form>
    <table>
   <tr><th>ID</th><th>Image</th><th>Name</th></tr>
   @foreach ($items as $item)
       <tr>
           <td>{{$item->product_id}}</td>
           <td><img src="{{$item->path}}" width="200" height="130"><td>
           <td>{{$item->product_name}}</td>
{{--           <td><a href="/image_edit?product_id={{$item->product_id}}">更新</a></td>  --}}
           <td><a href="/image_del?product_id={{$item->product_id}}">削除</a></td>
           <td>{{$test_1 ++}}</td>
       </tr>
   @endforeach
   </table>
@endsection
@section('footer')
copyright 2020 MasayaMatsumiya.
@endsection
