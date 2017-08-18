@extends("layout")
@section("content")
<div class="container vertical-align animated bounceInUp">
	<div class="jumbotron">
		<div class="row">
			<div class="col-md-6 animated rotateInDownLeft">
				<h1>¡Hola!</h1>
				{!! Form::open(array('url' => '4semanas/guarda', 'method' => 'post')) !!}
          {!! Form::hidden('id_auto', $registro->id_auto, array('id' => 'id_auto')) !!}
				<fieldset>
  				<legend>Datos del auto</legend>
  					@if($registro->fecha_llegada!="0000-00-00")
      				<div class="form-group">
      					<label role="fecha_llegada">Fecha llegada</label>
      					<div class='input-group date'>
                    		<input id="fecha_llegada" name="fecha_llegada" type='text' class="form-control" value="{{ formatDate($registro->fecha_llegada) }}" />
                    		<span class="input-group-addon">
                        		<span class="glyphicon glyphicon-calendar"></span>
                    		</span>
                		</div>
      				</div>
      				@else
      				<div class="form-group">
      					<label role="fecha_llegada">Fecha llegada</label>
      					<div class='input-group date age'>
                    		<input id="fecha_llegada" name="fecha_llegada" type='text' class="form-control" value="{{ $registro->fecha_llegada }}" />
                    		<span class="input-group-addon">
                        		<span class="glyphicon glyphicon-calendar"></span>
                    		</span>
                		</div>
      				</div>
      				@endif
      				<div class="form-group">
      					<label role="chasis">Chasis</label>
      					<input type="text" id="chasis" name="chasis" class="form-control" value="{{ $registro->chasis }}">
      				</div>
      				<div class="form-group">
      					<label role="tipo">Tipo de automovil</label>
      					<input type="text" name="tipo_auto" id="tipo_auto" class="form-control" value="{{ $registro->tipo_auto }}">
      				</div>
      			</fieldset>
      		</div>
      		<div class="col-md-6 animated rotateInDownRight">
      			<fieldset>
      			<legend>Datos de servicio</legend>
      				<div class="form-group">
      					<label role="ultimo_servicio">Ultimo servicio realizado</label>
      					<input type="text" name="ultimo_servicio" id="ultimo_servicio" class="form-control" value="{{ $registro->ultimo_servicio }}">
      				</div>
      				@if($registro->fecha_ultimo_servicio!="0000-00-00")
      				<div class="form-group">
      					<label role="fecha_ultimo_servicio">Fecha de ultimo servicio</label>
      					<div class='input-group date'>
                    		<input id="fecha_ultimo_servicio" name="fecha_ultimo_servicio" type='text' class="form-control" value="{{ $registro->fecha_ultimo_servicio }}">
                    		<span class="input-group-addon">
                        		<span class="glyphicon glyphicon-calendar"></span>
                    		</span>
                		</div>
      				</div>
      				@else
      				<div class="form-group">
      					<label role="fecha_ultimo_servicio">Fecha de ultimo servicio</label>
      					<div class='input-group date age'>
                    		<input id="fecha_ultimo_servicio" name="fecha_ultimo_servicio" type='text' class="form-control" value="{{ $registro->fecha_ultimo_servicio }}">
                    		<span class="input-group-addon">
                        		<span class="glyphicon glyphicon-calendar"></span>
                    		</span>
                		</div>
      				</div>
      				@endif
      				<div class="form-group">
      					<label role="servicio_pendiente">Servicio pendiente</label>
      					<input type="text" name="servicio_pendiente" id="servicio_pendiente" class="form-control" value="{{ $registro->servicio_pendiente }}">
      				</div>
      				<div class="form-group">
      					<label role="proximo_servicio">Proximo servicio</label>
      					<input type="text" name="proximo_servicio" id="proximo_servicio" class="form-control" value="{{ $registro->proximo_servicio }}">
      				</div>
      				@if($registro->fecha_proximo_servicio!="0000-00-00")
      				<div class="form-group">
      					<label role="fecha_proximo_servicio">Fecha proximo servicio</label>
      					<div class='input-group date'>
                    		<input id="fecha_proximo_servicio" name="fecha_proximo_servicio" type='text' class="form-control" value="{{ $registro->fecha_proximo_servicio }}">
                    		<span class="input-group-addon">
                        		<span class="glyphicon glyphicon-calendar"></span>
                    		</span>
                		</div>
      				</div>
      				@else
      				<div class="form-group">
      					<label role="fecha_proximo_servicio">Fecha proximo servicio</label>
      					<div class='input-group date age'>
                    		<input id="fecha_proximo_servicio" name="fecha_proximo_servicio" type='text' class="form-control" value="{{ $registro->fecha_proximo_servicio }}">
                    		<span class="input-group-addon">
                        		<span class="glyphicon glyphicon-calendar"></span>
                    		</span>
                		</div>
      				</div>
      				@endif
      				<div class="form-group">
      					<label role="tecnico">Tecnico que llevó el servicio</label>
      					<input type="text" name="tecnico" id="tecnico" class="form-control" value="{{ $registro->tecnico }}">
      				</div>
      			</fieldset>
      		</div>
      	</div>
      	<div class="row">
      		<div class="col-sm-offset-4 col-sm-4 vertical-double">
      			<button class="btn btn-danger btn-lg" onclick="history.back(-1)"><span class="glyphicon glyphicon-menu-left"></span> Volver</button>
				<button type="submit" class="btn btn-lg btn-success"><span class="glyphicon glyphicon-ok"></span> Actualiza</button>
      		</div>	
			{!! Form::close() !!}
		</div>
	</div>
</div>
@endsection