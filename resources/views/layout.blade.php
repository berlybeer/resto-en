<html>
	<head>
		<title> @yield('title') - page</title>
	</head>
	<style>
		.header{
			color: 'green'
		}
		.content{
			    background-color: lightcoral;
			    font-size: 20px;
			    color: #fff;
			    padding: 30px;
		}
	</style>
	<body>
		<div class="header">
			@section('header')
			<h1>Header is common</h1>
			@show
		</div>
		<div class="content">
			@section('content')
			<h1></h1>
			@show
		</div>
	</body>
</html>