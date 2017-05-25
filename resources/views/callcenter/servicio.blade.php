@extends("layout")
@section("content")
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<h1>Encuestas de servicio</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<!--div class="table-responsive"-->
					<table class="table table-striped">
						<thead>
							<tr>
								<th>Id</th>
								<th>Orden</th>
								<th>Fecha Orden</th>
								<th>Modelo</td>
								<th>Tipo</th>
								<th>Modelo Año</th>
								<th>Año de fabricación</th>
								<th>No. Serie</th>
								<th>Contactable</th>
								<th>Correo electronico</th>
								<th>Cliente Factura</th>
								<th>Telefono</th>
								<th>Ext</th>
								<th>Celular</th>
								<th>Cliente vehiculo</th>
								<th>Telefono 1</th>
								<th>Ext</th>
								<th>Cliente contacto</th>
								<th>Telefono</th>
								<th>Ext</th>
								<th>Asesor Servicio</th>
								<th>Tipo Servicio</th>
								<th>Servicio Realizado y/o reparación</th>
								<th>Num. Factura</th>
								<th>Acción</th>
							</tr>
						</thead>
						<tbody>
						@foreach($registro as $reg)
							<tr>		
								<form class="form" method="get" action="servicio/{{ $reg->id_registro }}">
								<th>{{ $reg->id_registro }}<input type="hidden" name="id_registro" id="id_registro" value="{{$reg->id_registro}}"></th>
								<td>{{ $reg->no_orden }}</td>
								<td>{{ $reg->fecha_insercion }}</td>
								<td>{{ $reg->nombre_modelo }}</td>
								<td>{{ $reg->modelo }}}</td>
								<td>{{ $reg->ano_modelo }}</td>
								<td>Vacio aún</td>
								<td>{{ $reg->chasis }}</td>
								<td>{{ $reg->contactable }}</td>
								<td>{{ $reg->email }}</td>
								<td>{{ $reg->nombre.' '.$reg->ap_paterno.' '.$reg->ap_materno }}</td>
								<td>{{ '('.$reg->lada.') '.$reg->telefono1 }}</td>
								<td>{{ $reg->ext1 }}</td>
								<td>{{ '('.$reg->lada_cel.') '.$reg->celular }}</td>
								<td>{{ $reg->nombre_contacto.' '.$reg->app_contacto.' '.$reg->apm_contacto }}</td>
								<td>{{ '('.$reg->lada_contacto.') '.$reg->telefono_contacto }}</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td>Maribel Vilchis</td>
								<td>{{ $reg->tipo_servicio }}</td>
								<td>15,000 km</td>
								<td>2345</td>
								<td><button type="submit" class="btn btn-primary">Iniciar Encuesta</button></td>
								</form>
							</tr>
						@endforeach
						</tbody>
					</table>
				<!--/div-->
			</div>
		</div>
	</div>
@endsection