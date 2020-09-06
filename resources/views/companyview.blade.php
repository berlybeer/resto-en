<div>
	<form action="update" method="post">
		@csrf
		<select name="id" id="">
			<option value="7">Facebook</option>
			<option value="2">Google</option>
			<option value="9">SAP</option>
		</select>
		<br><br>
		<input type="text" name="name"><br><br>
		<input type="text" name="address"><br><br>
		<button type="submit">Update</button>
	</form>

</div>