<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" id="busqueda">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Buscar</h4>
            </div>
            <div class="modal-body">
                {!! Form::open(array('url' => '/4semanas/buscando', 'method' => 'post')) !!}
                <fieldset>
                    <legend>Por fecha</legend>
                    <div class="form-group">
                        <label>fecha de llegada:</label>
                        <div class='input-group date' id='buscaLlegada'>
                            <input type='text' id="bllegada" name="bllegada" class="form-control"/>
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                    </div>
                </fieldset>
                <fieldset>
                    <legend>Por chasis</legend>
                    <div class="form-group">
                        <label>Chasis:</label>
                        <input type="text" class="form-control" name="chasis" id="chasis">
                    </div>
                </fieldset>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                {!! Form::submit('Buscar', ["class" => "btn btn-success"]) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>