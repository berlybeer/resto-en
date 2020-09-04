<h1>Users List</h1>

<li>
	<span class="header">Name</span>
	<span class="header">Name</span>
	<span class="header">Name</span>
</li>
@foreach($data as $item)

<li>
	<span>{{$item->name}}</span>
	<span>{{$item->email}}</span>
	<span>{{$item->age}}</span>
</li>

@endforeach


<style>
	span{
		color:  red;
		display:  inline-block;
		width:  100px;
		background-color: bisque;
		margin-bottom:  3px;
		margin-left:  3px;
		padding:  10px;

	}

	span.header{
		color:  white;
		background-color: black;
	}

	li {
		list-style:  none;
	}
</style>