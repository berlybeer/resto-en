<h1>Data list</h1>

<ul>	

@foreach($data as $item)

<li><h3>	{{$item['title']}}</h3><p>	{{$item['body']}}</p>	</li>
@endforeach

</ul>
<!-- {{print_r($data)}} -->