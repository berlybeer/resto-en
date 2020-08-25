<form action="formcontroller" method="get">
	Email: <input type="text" name="address">
	{{@csrf_field()}}

	<button type="submit">Send post request</button>

</form>