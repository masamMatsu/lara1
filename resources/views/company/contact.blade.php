@extends('layouts.contact')

<button class="click1" onclick="location.href='./top'">戻る</button><br>

<h1>お問合せフォーム</h1>


<form action="/done" method="POST">
    <br>
    <textarea class="contact" name="Comment" rows="5"cols="30"　size="100" value="コメント"></textarea>
    <br>
    
    <input class="click2" type="button" onclick="location.href='./done'" value="送信"><br>
</form>

</body>
</html>