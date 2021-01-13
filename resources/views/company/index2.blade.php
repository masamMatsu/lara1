@extends('layouts.helloapp2')

<form action="/company" method="post">
   <div class="button_wrapper">
@section('content')
   <input class="click" type="button" onclick="location.href='./company3'" value="グッズ編集"><br>
   <input class="click" type="button" onclick="location.href='./contact'" value="お問合せ"><br>
   <input class="click" type="button" onclick="location.href='./accountedit'" value="アカウント管理"><br>
   <input class="click" type="button" onclick="location.href='./companylogin'" value="ログアウト"><br>
   </div>
@endsection