<html>
<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Londrina+Shadow" rel="stylesheet">
    <style>
    body {font-size:16pt; color:black; margin: 0px; }
    h1 { font-size:60pt; text-align:center; color:white;
    margin:-10px 0px 30px 0px; letter-spacing:-4pt; font-family: 'Londrina Shadow', cursive;}
    h2 {font-size:30pt; text-align:center; color:white;
    margin:-40px 0px 30px 0px; letter-spacing:-4pt;}
    ul { font-size:12pt; }
    hr { margin: 25px 100px; border-top: 1px dashed #ddd; }
    .menutitle {font-size:14pt; font-weight:bold; margin: 0px; }
    .content {margin:50px; text-align:center;}
    .footer { text-align:right; font-size:10pt; margin:10px;
    border-bottom:solid 1px #ccc; color:#ccc; }
    tr {margin:20px 0px -30px 0px;}
    th {background-color:#3498db; color:#fff; padding:5px 10px; padding-color:black;}
    td {border: solid 1px #aaa; color:black; padding:5px 10px; font-size:13pt;
        background-color: white;
    -webkit-transition: all 0.3s ease;
    -moz-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    transition: all  0.3s ease;
    }
    table {border-collapse: collapse; width:1390px; text-align:center; margin:10px 8px 10px; table-layout: fixed;}
    table th, table td {border: solid 1px black;}
    .box1 {padding: 0.5em 0.5em ;margin: 0px 0px; width: auto;  border: solid 3px #000000; }
    .box1 p {margin: 0px 5px 0px -5px; padding: 0; width: auto 10;}
    
    .button_wrapper remodal-bg{font-size: 1.4em;
font-weight: bold;
padding: 10px 30px;
color: #fff;
border-style: none;
box-shadow: 2px 2px 3px 1px #666;
-moz-box-shadow: 2px 2px 3px 1px #666;
-webkit-box-shadow: 2px 2px 3px 1px #666;
text-shadow: 1px 1px 2px #000;
background: -moz-linear-gradient(bottom, #36d, #248 50%, #36d);
background: -webkit-gradient(linear, left bottom, left top, from(#36d), color-stop(0.5, #248), to(#36d));
-moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    border-radius: 5px;
}
.click1 {
  position: relative;
  display: inline-block;
  font-weight: bold;
  padding: 0.25em 0.5em;
  text-decoration: none;
  border-bottom: solid 3px #668ad8;
  border-left: solid 3px #668ad8;
  color: #668ad8;
  transition: .4s;
}
.click:hover {
  padding-left: 0.7em;
  padding-right: 0.3em;
}
.add {
  font-size: 1.2em;/*文字の大きさ*/
  font-weight: normal;　/*文字の太さ*/
  margin:0px 1000px 10px 0px;
  opacity: 0.7;
  color: black;
}
body{
    background-image:url('../images/run.jpeg');
    }
    </style>
</head>

<body>
    <h2>@yield('sub_title')</h2>
    <div class="content">
        @yield('content')
    </div>
    
</body>
</html>
