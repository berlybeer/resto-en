<h1>Users list</h1>
<table>
	@foreach($data as $item)
	<tr>
		<td>{{$item->name}}</td>
		<td>{{$item->email}}</td>
		<td>{{$item->age}}</td>
	</tr>
	@endforeach
</table>

{{$data->links()}}
<style>
	td{
		background-color:  antiquewhite;
		padding:  12px;

	}

	li{
		list-style: none;
		display: inline;
	}
</style>