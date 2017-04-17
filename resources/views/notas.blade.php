@extends("layout")
@section("content")
	<h1>Notas</h1>
	<ul>
		@foreach($notas as $nota)
		<li> {{ $nota->nota }} </li>
		@endforeach
	</ul>
@endsection