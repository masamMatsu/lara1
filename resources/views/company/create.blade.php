@extends('layouts.helloapp3')

<button class="click1" onclick="location.href='./top'">戻る</button><br>

@section('content')
<form action="/confirm" method="post">
   <table>
    <tr>
      <th>品番</th>
      <th>品名</th>
      <th>写真</th>
      <th>カテゴリー1</th>
      <th>カテゴリー２</th>
      <th>サイズ</th>
      <th>カラー</th>
      <th>性別</th>
      <th>企業ID</th>
      <th>更新</th>
      <th>削除</th>
    </tr>
    <tr>
      <td>{{ $data{'goods_id'] }}</td>
      <td>{{ $data{'goods_name'] }}</td>
      <td>{{ $data{'price'] }}</td>
      <td>{{ $data{'category1'] }}</td>
      <td>{{ $data{'category2'] }}</td>
      <td>{{ $data{'size'] }}</td>
      <td>{{ $data{'sex'] }}</td>
      <td>{{ $data{'color'] }}</td>
      <td>{{ $data{'comapny_id'] }}</td>
      <td><img src="{{ $data{'read_temp_path'] }}"></td>
    </tr>
    @endforeach
</table>
<input class="add" type="button" name="action" value="登録"/><br>
{{ $items->links() }}

@endsection