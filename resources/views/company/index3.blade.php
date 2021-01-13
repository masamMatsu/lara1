@extends('layouts.helloapp3')

<button class="click1" onclick="location.href='./top'">戻る</button><br>

@section('content')
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
    @foreach ($items as $item)
    <tr>
        <td>{{ $item->goods_id }}</td>
        <td>{{ $item->goods_name }}</td>
        <td><img src="{{ $item->goods_image }}"></td>
        <td>{{ $item->category1 }}</td>
        <td>{{ $item->category2 }}</td>
        <td>{{ $item->size }}</td>
        <td>{{ $item->color }}</td>
        <td>{{ $item->sex }}</td>     
        <td>{{ $item->company_id }}</td>
        <td><a href="/company/edit?goods_id={{$item->goods_id}}">更新</a></td>
        <td><a href="/company/del?goods_id={{$item->goods_id}}">削除</a></td>
    </tr>
    @endforeach
</table>
<input class="add" type="button" onclick="location.href='./company/add'" value="新規登録"><br>
{{ $items->links() }}

@endsection