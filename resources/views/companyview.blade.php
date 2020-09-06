<form action="delete" method="post">
	@csrf
	<select name="id">
		<option value="1">Faceboom</option>
		<option value="2">Google</option>
		<option value="9">SAP</option>
	</select>
	<br><br>
	<button type="submit">Delete</button>
</form>