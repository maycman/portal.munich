@extends("layout")
@section("content")
	<div class="container">
		<div class="row">
			<div col-sm-1>
				<p><STRONG>Nombre:</STRONG> </p>
				@foreach($registro as $data)
				<p><strong>Id: {{ $registro->id_registro }}</strong></p>
				@endforeach
			</div>
		</div>
	</div>
@endsection