@extends('layouts.helloapp')
  
@section('content')
   <form action="/company" method="post">
   @csrf
       <tr><th>ログインID: </th><td><input type="text" name="login_id"></td></tr>
       <br>
       <tr><th></th><td>※必須項目。数字のみ入力。8文字以上16文字以内の入力。</td></tr>
       <br>
       @if ($errors->has('login_id'))
       <tr><th></th><td><font color="red">{{$errors->first('login_id')}}</font></td></tr>
       @endif

       <hr size="1">
       <tr><th>パスワード: </th><td><input type="password" name="password" value=""></td></tr>
       <br>
       <tr><th></th><td>※必須項目。数字のみ入力。8文字以上16文字以内の入力。</td></tr>
       @if ($errors->has('password'))
       <tr><th></th><td><font color="red">{{$errors->first('password')}}</font></td></tr>
       @endif
       <br>
       <input class="click" type="button" onclick="location.href='./top'" value="ログイン">
   </div>
@endsection