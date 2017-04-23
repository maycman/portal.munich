@extends("layout")
@section("content")
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h1>Encuestas de servicio</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<div class="table-responsive">
					<table class="table table-striped">
						<thead>
							<tr>
								<th>Id</th>
								<th>Cliente</th>
								<th>Modelo</td>
								<th>Tipo</th>
								<th>Modelo Año</th>
								<th>Num. Factura</th>
								<th>Asesor Servicio</th>
								<th>Acción</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th>1</th>
								<td>Pedro Kumamoto Sanchez</td>
								<td>Polo</td>
								<td>ComfortLine</td>
								<td>2017</td>
								<td>23465</td>
								<td>Maribel Vilchis</td>
								<td><button class="btn btn-primary">Iniciar Encuesta</button></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
@endsection