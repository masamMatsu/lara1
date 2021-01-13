@extends('layouts.helloapp')

@section('title', 'Image Confirm')

@section('menubar')
    画像確認
   @parent
@endsection


@section('content')
    <form action="image_complete" method="post">
        @csrf
        <table border="1">
            <tr>
                <td>画像</td>
                <td><img src="{{ $data['read_temp_path'] }}" width="200" height="130"></td>
            </tr>
            <tr>
                <td>商品名</td>
                <td>{{ $data['product_name'] }}</td>
            </tr>
        </table>
        <input type="submit" name="action" value="送信" />
    </form>
@endsection

@section('footer')
copyright 2020 MasayaMatsumiya.
@endsection
