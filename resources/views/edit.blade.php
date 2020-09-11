@extends('layout')

@section('content')

<div class="col-sm-6">
	<h1>Edit Restaurant</h1>
	<form method="post" action="">
		@csrf
	  <div class="form-group">
	    <label>Name</label>
	    <input type="text" name="name" class="form-control" value="{{$data->name}}">	 
	  </div>

	  <div class="form-group">
	    <label>Email</label>
	    <input type="text" name="email" class="form-control" value="{{$data->email}}">	 
	  </div>
	   <div class="form-group">
	    <label>Address</label>
	    <input type="text" name="address" class="form-control" value="{{$data->address}}">	 
	  </div>

	  <button type="submit" class="btn btn-primary">Edit</button>
	</form>
</div>

@stop