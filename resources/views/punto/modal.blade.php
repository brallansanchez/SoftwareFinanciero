<div class="modal fade modal-slide-in-right" aria-hidden="true"
role="dialog" tabindex="-1" id="modal-delete-{{$punto->idpunto}}">
	{{Form::Open(array('action'=>array('PuntoEquilibrioController@destroy',$punto->idpunto),
	'method'=>'delete'))}}
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"
				aria-label="Close">
                     <span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title">Eliminar Datos</h4>
			</div>

			<div class="modal-body">
				<p>¿
          Desea eliminar Los siguientes datos?</p>
				<div>
			<p>{{$punto->costofijo}}</p>
      <p>{{$punto->costovariable}}</p>
      <p>{{$punto->precioventa}}</p>
      <p>{{$punto->cantidad}}</p>
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
