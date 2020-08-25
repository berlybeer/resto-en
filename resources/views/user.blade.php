<h1>User account</h1>
<!-- @if($errors->any())
<div>
	<ul>
		@foreach($errors->all() as $err)
		<li>{{$err}}</li>
		@endforeach
	</ul>
</div>
@endif -->
<form action="usercontroller" method="post">
	<input type="text" name="address" placeholder="address">
	<br>
	@error('address')
	<span style="color:red">{{$message}}</span>
	@enderror
	{{@csrf_field()}}
	<br>
	<br>
	<input type="text" name="email" placeholder="email">
	<br>
	@error('email')
	<span style="color:red">{{$message}}</span>
	@enderror
	<br>
	<br>
	<button type="submit">submit</button>
</form>