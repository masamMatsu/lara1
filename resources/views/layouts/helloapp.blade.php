<html>
<head>
   <title>@yield('title')</title>
   <style>
   body {font-size:16pt; color:#999; margin: 5px; }
   h1 { font-size:50pt; text-align:right; color:#f6f6f6;
       margin:-20px 0px -30px 0px; letter-spacing:-4pt; }
   ul { font-size:12pt; }
   hr { margin: 25px 100px; border-top: 1px dashed #ddd; }
   .menutitle {font-size:14pt; font-weight:bold; margin: 0px; }
   .content {margin:10px; }
   .footer { text-align:right; font-size:10pt; margin:10px;
       border-bottom:solid 1px #ccc; color:#ccc; }
   th {background-color:#999; color:fff; padding:5px 10px; }
   td {border: solid 1px #aaa; color:#999; padding:5px 10px; }
   
   a { color: #b7a077; }
    a:visited { color: #a8a8a8; }
    a:hover {
    color: #988564;
    font-weight: bold;
    text-decoration: none;
    }
    a img { transition: opacity 0.2s linear; }
    a:hover img { opacity: 0.7; }
   
    #global_navi {
    width: 980px;
    clear: both;
    overflow: hidden;
    margin: 16px auto;
    }
    #global_navi ul {
    list-style: none;
    margin: 0;
    padding: 0;
    }
    #global_navi ul li {
    width: 195px;
    float: left;
    margin-right: 1px;
    text-align: center;
    }
    #global_navi ul li a {
    display: block;
    padding: 16px;
    background-color: #352b23;
    color: #fff;
    text-decoration: none;
    transition: background-color 0.2s linear;
    }
    #global_navi ul li.current a { 
    background-color: #b7a077; 
    }
    #global_navi ul li a:hover { 
    background-color: #8c7a5b;
    }
   
</style>
</head>
<body>
   <h1>@yield('title')</h1>
   @section('menubar')
   <nav id="global_navi">
      <ul>
        <li><a href="/hello"">HOME</a></li>
        <li><a href="/hello/other">カウントアップ</a></li>
        <li><a href="/hello/other2">ToDOリスト</a></li>
        <li><a href="/jissyu12">ユーザメニュー</a></li>
        <li><a href="/image_input">画像管理  地図管理</a></li>
      </ul>
    </nav>
       @show
   <hr size="1">
   <div class="content">
   @yield('content')
   </div>
   <div class="footer">
   @yield('footer')
   </div>
</body>
</html>
