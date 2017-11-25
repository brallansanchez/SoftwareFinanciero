@extends('layouts.master')

@section('title','Editar Razones')

@section('content')
<!-- Main component for a primary marketing message or call to action -->
   <ol class="breadcrumb">
     <li><a href="{{url('dashboard')}}">Escritorio</a></li>
     <li><a href="{{url('dashboard')}}">Razones Financieras</a></li>
    <li class="active">Editar Datos de Razones Financieras/li>

   </ol>


   <div class="row">
     <div class="col-md-8">

        <div class="panel panel-default">
          <div class="panel-heading">
            Eliminar
           </div>
          <div class="panel-body">
 {!!Form::open(['route'=>['razon.destroy',$razon->id],'method'=>'DELETE'])!!}
              <div class="form-group">
               <label for="exampleInputPassword1">DESA ELIMINAR ESTE REGISTRO</label>
                   </div>
             <div class="form-group">
                {!!form::label('Activo Circulante')!!}
                {!!$razon->activocorriente!!}
             </div>
               <div class="form-group">
                {!!form::label('Pasivo Circulante')!!}
                {!!$razon->pasivocorriente!!}
             </div>
             <div class="form-group">
                {!!form::label('Inventario')!!}
                {!!$razon->inventario!!}
             </div>
               <div class="form-group">
                {!!form::label('Activo Total')!!}
                {!!$razon->activototal!!}
             </div>
             <div class="form-group">
                {!!form::label('Deuda Total')!!}
                {!!$razon->deudatotal!!}
             </div>
               <div class="form-group">
                {!!form::label('venta')!!}
                {!!$razon->venta!!}
             </div>
             <div class="form-group">
                {!!form::label('Cuenta por Cobrar')!!}
                {!!$razon->cuentapcobrar!!}
             </div>
               <div class="form-group">
                {!!form::label('Activo Fijo')!!}
                {!!$razon->activofijo!!}
             </div>
             <div class="form-group">
                {!!form::label('Razon de Liquidez')!!}
                {!!$razon->liquidez!!}
             </div>
               <div class="form-group">
                {!!form::label('Prueba Acida')!!}
                {!!$razon->pruebaacida!!}
             </div>
             <div class="form-group">
                {!!form::label('Razon de Endeudamiento')!!}
                {!!$razon->endeudamiento!!}
             </div>
               <div class="form-group">
                {!!form::label('Rotacion de Activos')!!}
                {!!$razon->rotacion!!}
             </div>
             <div class="form-group">
                {!!form::label('DSO')!!}
                {!!$razon->diaspc!!}
             </div>
               <div class="form-group">
                {!!form::label('Rotacion de Activos Fijos')!!}
                {!!$razon->raf!!}
             </div>
           </div>
             <div class="form-group">
              {!!form::label('Rotacion de Activos Totales')!!}
              {!!$razon->rat!!}
           </div>
                 {!!form::submit('Eliminar',['name'=>'guardar','id'=>'Guardar','content'=>'<span>Eliminar</span>','class'=>'btn btn-warning btn-sm m-t-10'])!!}
                 <button type='button' id='cancelar' class='btn btn-default btn-sm m-t-10'>Cancelar</button>
          {!!Form::close()!!}

          </div>

        </div>
<script>
  $("#cancelar").click(function(event)
  {
      document.location.href = "{{ route('product.index')}}";
  });
</script>

     </div>
   </div>


@endsection
