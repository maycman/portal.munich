@extends("layout")
@section("content")
<div class="container animated fadeInDown">
	<div class="row vertical-align">
		<div class="col-sm-6 col-md-offset-3">
			<div class="title-sub">Servicio de 4 Semanas</div>
		</div>
	</div>
</div>
<div class="container-fluid animated fadeInDown">
	<div class="row">
		<div class="col-sm-2">
			<button class="btn btn-block btn-default" data-toggle="modal" data-target="#nuevo">Nuevo registro</button>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-2 mgn-top">
			{!! Alert::render() !!}
		</div>
	</div>
</div>
@include("autos.nuevoRegistro")
<div class="container-fluid mgn-top animated bounceInUp">
	<div class="row">
		<div class="col-sm-12">
			<div class="table-responsive">
				<table class="table table-hover">
					<thead>
						<th>Id</th>
						<th>Fecha de llegada</th>
						<th>Chasis</th>
						<th>Tipo de automovil</th>
						<th>Ultimo servicio realizado</th>
						<th>Fecha ultimo servicio</th>
						<th>Servicio pendiente</th>
						<th>Proximo servicio</th>
						<th>Fecha proximo servicio</th>
						<th>Tecnico que llevó el servicio</th>
					</thead>
					<tbody>
						@foreach($datos as $row)
						<tr>
							<td>{{ $row->id_auto }}</td>
							<td>{{ $row->fecha_llegada }}</td>
							<td>{{ $row->chasis }}</td>
							<td>{{ $row->tipo_auto }}</td>
							<td>{{ $row->ultimo_servicio }}</td>
							<td>{{ $row->fecha_ultimo_servicio }}</td>
							<td>{{ $row->servicio_pendiente }}</td>
							<td>{{ $row->proximo_servicio }}</td>
							<td>{{ $row->fecha_proximo_servicio }}</td>
							<td>{{ $row->tecnico }}</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
@endsection