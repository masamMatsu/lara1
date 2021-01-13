@extends('layouts.helloapp')

@section('title', '松Laravel')

@section('menubar')
    HOME
   @parent
@endsection

@section('content')
   <table>
   <tr><th>ID</th><th>Image</th><th>Name</th></tr>
   @foreach ($items as $item)
       <tr>
           <td>{{$item->product_id}}</td>
           <td><img src="{{$item->path}}" width="200" height="130"><td>
           <td>{{$item->product_name}}</td>
       </tr>
   @endforeach
   </table>
@endsection

@section('footer')
copyright 2020 MasayaMatsumiya.
@endsection
