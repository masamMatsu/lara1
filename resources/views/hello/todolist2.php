<!DOCTYPE html>

<style>
@charset "UTF-8";
html {
	width: 80%;
	margin-right: auto;
	margin-left: auto;
	font-family: sans-serif;
	font-size: 16px;
	line-height: 1.5;
}

input,button,select,optgroup,textarea {
	font-family: inherit;
	font-size: inherit;
	line-height: inherit;
}

button {
	cursor: pointer;
	padding: 6px 12px;
	border-radius: 6px;
	color: #fff;
	border: 2px;
	background-color: #007bff;
	transition: background-color .2s
}
button:hover {
	background-color: #0069d9;
}
button:active {
	background-color: #003c7c;
}
button:disabled {
	opacity: .5;
	pointer-events: none;
}

input {
	padding: 6px 12px;
	border-radius: 6px;
	color: #495057;
	border: 2px solid #ced4da;
}

textarea {
	width: 500px;
	height: 200px;
}
select {
	border: 2px solid #ced4da;
}

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


<html>
	<head>
		<meta charset="UTF-8">
		<title>Vue.js sample</title>
		<link rel="stylesheet" href="style.css" >
		<script src="https://cdn.jsdelivr.net/npm/vue@2.5.17/dist/vue.js"></script>
	</head>
	
	<body>
    
    <h2>ToDoリスト</h2>
    
    <nav id="global_navi">
      <ul>
        <li><a href="/hello"">HOME</a></li>
        <li><a href="/hello/other">カウントアップ</a></li>
        <li><a href="/hello/other2">ToDOリスト</a></li>
        <li><a href="/jissyu12">ユーザメニュー</a></li>
        <li><a href="/image_input">画像管理</a></li>
      </ul>
    </nav>


		<div id="app">
			<div v-for="todo in todos">
				<label>
					<input type="checkbox" v-model="todo.done">
					<span v-bind:class="{donestyle:todo.done}">{{todo.text}}</span>
				</label>
			</div>
			
			<input type="text" v-model.trim="addtext" v-on:keyup.enter="addToDo" placeholder="すること">
			<p><button v-on:click="cleanToDo">処理済みを削除</button></p>
			<p>{{ remaining }} / {{ todos.length }}件処理
		</div>

		<script>
			new Vue({
				el: '#app',
				data: {
					addtext:'',
					todos: [
						{done:false, text:'パンを買う'},
						{done:false, text:'コーヒーを買う'}
					]
				},
				computed: {
					remaining: function() {
						return this.todos.filter(function(val) {
							return val.done == true;
						}).length;
					}
				},
				methods: {
					addToDo: function() {
						if (this.addtext) {
							this.todos.push({done:false, text:this.addtext});
							this.addtext = '';
						}
					},
					cleanToDo: function() {
						this.todos = this.todos.filter(function(val) {
							return val.done == false;
						})
					}
				}
			})
		</script>

		<style>
			.donestyle {
				text-decoration: line-through;
				color: lightgray;
			}
		</style>
	</body>
</html>