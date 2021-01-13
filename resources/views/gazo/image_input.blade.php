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


   <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCL8KAuEKaMSL2s3FDh94phBAxlD2sB0b0&sensor=false"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/exif-js/2.2.1/exif.min.js"></script>
<script type='text/javascript'>
$(function() {
    $('#test').on('click', function() {
        var file_input = $('#file-input');
        var file = file_input[0].files[0];
        console.log('file_input:'+file_input.name);
        console.log('file:'+file.name);
        
        // EXIF.getDataでexif情報を解析
        EXIF.getData(file, function() {
            var result = '';
            // EXIF.getTag(this, "[exifのタグ名]")で、値を取得
            result += 'DateTimeOriginal:' + EXIF.getTag(this, "DateTimeOriginal");
            result += '<br>';
            result += 'Orientation:' + EXIF.getTag(this, "Orientation");
            result += '<br>';
            result += 'GPSLatitude:' + EXIF.getTag(this, "GPSLatitude");
            result += '<br>';
            result += 'GPSLongitude:' + EXIF.getTag(this, "GPSLongitude");
            Lat=EXIF.getTag(this,"GPSLatitude");
            Lon=EXIF.getTag(this,"GPSLongitude");
            LatDeg=Lat.shift();LatMin=Lat.shift();LatSec=Lat.shift();
            LonDeg=Lon.shift();LonMin=Lon.shift();LonSec=Lon.shift();
            NDeg=(LatSec/60+LatMin)/60+LatDeg;
            EDeg=(LonSec/60+LonMin)/60+LonDeg;
            result += '<br>';
            result += NDeg;
            result += '<br>';
            result += EDeg;
            $('#result').html(result);
            var latlng = new google.maps.LatLng(NDeg, EDeg); //中心の緯度, 経度
            var map = new google.maps.Map(document.getElementById('googleMap'), {
                zoom: 17,
                center: latlng
            });
            var sw = new google.maps.LatLng(NDeg, EDeg); //左下（南西）
            var ne = new google.maps.LatLng(NDeg+0.0004, EDeg+0.0006); //右上（北東）
            var latlngImg = new google.maps.LatLngBounds(
                sw,ne
            );
            var groundOverlay = new google.maps.GroundOverlay(
                "../../../storage/app/public/productimage/{file.name}",
                latlngImg, //オリジナル画像をを表示する範囲の座標
                {map: map} //オリジナル画像をを表示する地図
            );
        });
    });
});
var myCenter=new google.maps.LatLng(51.508742,-0.120850);
function initMap() {
	var latlng = new google.maps.LatLng(35.6843218, 139.70311200000003); //中心の緯度, 経度
	var map = new google.maps.Map(document.getElementById('googleMap'), {
		zoom: 17,
		center: latlng
	});
	var sw = new google.maps.LatLng(35.684206, 139.702751); //左下（南西）
	var ne = new google.maps.LatLng(35.684676, 139.703360); //右上（北東）
	var latlngImg = new google.maps.LatLngBounds(
		sw,ne
	);
	var groundOverlay = new google.maps.GroundOverlay(
		'ping.png',
		latlngImg, //オリジナル画像をを表示する範囲の座標
		{map: map} //オリジナル画像をを表示する地図
	);
}
google.maps.event.addDomListener(window, 'load', initMap);
</script>
    <h3>exifテスト</h3>
    <input id="file-input" type="file" />
    <div>
        <input type="button" id="test" value="実行" />
    </div>
    <div id="result"></div>

    <div id="googleMap" style="width:500px;height:380px;"></div>










@endsection

@section('footer')
copyright 2020 MasayaMatsumiya.
@endsection
