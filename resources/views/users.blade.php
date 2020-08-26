@include('header')

<x-profile />

<h1>Users view</h1>
{{{$data['email']}}}



<h1>If statement</h1>

<form action="">
@csrf
@method('PUT')
</form>

@if($data['name'] == 'anil')
<p>same user</p>
@else
<p>other user</p>
@endif

<h1>Foreach loop</h1>
@foreach($data as $key => $item)
<h3>{{$key}}: {{$item}}</h3>
@endforeach

<h1>For loop</h1>
@for($i=0; $i < 10; $i++)
<h3>current value is {{$i}}</h3>
@endfor



