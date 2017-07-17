@extends("layout")

@section("content")
<div class="container">
	<div class="row buffer-top">
		<div class="col-sm-4 col-sm-offset-3">
			<h1>Cargar Base</h1>
			<!--form class="form" method="post" action="cargando" enctype=”multipart/form-data”>
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<div class="form-group">
					<label class="btn btn-default btn-file" role="Archivo">
    					Base de datos <input class="file" type="file" name="base" id="base" required>
					</label>
				</div>
				<div class="form-group">
					<button class="btn btn-primary btn-lg" type="submit">Cargar</button>
				</div>
			</form-->
            {!! Form::open(array('url' => 'cargando', 'method' => 'post', 'files' => true)) !!}
            	<div class="form-group">
            		{!! Form::label('file', 'Carga: ') !!}
            		<span class="btn btn-default btn-file">
            			Selecciona la base de datos
            			{!! Form::file('base') !!}
                    </span>
                </div>
                <div class="form-group">
                	{!! Form::submit('Send', ["class" => "btn btn-success btn-block btn-lg"]) !!}
                </div>
            {!! Form::close() !!}
		</div>
	</div>
</div>
@endsection