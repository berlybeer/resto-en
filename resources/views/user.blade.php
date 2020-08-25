<h1>User account</h1>
<form action="usercontroller" method="post">
	Email: <input type="text" name="email">
	{{@csrf_field()}}
	<br>
	<br>
	Password: <input type="password" name="password">
	<br>
	<br>
	<button type="submit">submit</button>
</form>