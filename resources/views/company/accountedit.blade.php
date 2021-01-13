@extends('layouts.accountedit')

<button class="click1" onclick="location.href='./top'">戻る</button><br>
  
@section('content')
   <form action="/company" method="post">
   @csrf
       <tr><th>パスワード変更: </th><td><input type="text" name="login_id"></td></tr>
       <br>
       <tr><th></th><td>※必須項目。数字のみ入力。8文字以上16文字以内の入力。</td></tr>
       <br>
       @if ($errors->has('login_id'))
       <tr><th></th><td><font color="red">{{$errors->first('login_id')}}</font></td></tr>
       @endif

       <hr size="1">
       <tr><th>確認: </th><td><input type="password" name="password" value=""></td></tr>
       <br>
       <tr><th></th><td>※必須項目。数字のみ入力。8文字以上16文字以内の入力。</td></tr>
       @if ($errors->has('password'))
       <tr><th></th><td><font color="red">{{$errors->first('password')}}</font></td></tr>
       @endif
       <br>
       <input class="click" type="button" onclick="location.href='./top'" value="変更">
   </div>
@endsection