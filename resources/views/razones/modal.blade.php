<div class="modal fade modal-slide-in-right" aria-hidden="true"
role="dialog" tabindex="-1" id="modal-delete-{{$razon->idrazon}}">
	{{Form::Open(array('action'=>array('RazonesController@destroy',$razon->idrazon),
	'method'=>'delete'))}}
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"
				aria-label="Close">
                     <span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title">Eliminar Datos de Razones Financieras</h4>
			</div>
			<div class="modal-body">
				<p>¿Desea eliminar Los siguientes datos?</p>
				<div>
			<p>{{$razon->liquidez}}</p>
      <p>{{$razon->pruebaacida}}</p>
      <p>{{$razon->endeudamiento}}</p>
      <p>{{$razon->rotacion}}</p>
      <p>{{$razon->diaspc}}</p>
      <p>{{$razon->raf}}</p>
      <p>{{$razon->rat}}</p>
			</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
				<button type="submit" class="btn btn-primary">Confirmar</button>
			</div>
		</div>
	</div>
	{{Form::Close()}}

</div>
