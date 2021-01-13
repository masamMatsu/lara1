@extends('layouts.helloapp')

@section('title', 'ユーザ情報詳細')

@section('menubar')
ユーザ情報詳細
   @parent
@endsection

@section('content')
   <table>
   <tr><th>Name</th><th>Mail</th><th>Age</th></tr>
       <tr>
           <td>{{$item->name}}</td>
           <td>{{$item->mail}}</td>
           <td>{{$item->age}}</td>
       </tr>
   </table>
@endsection

@section('footer')
copyright 2020 MasayaMatsumiya.
@endsection
