@extends('layouts.master')

@section('title','Lista de Razones')

@section('content')
<!-- Main component for a primary marketing message or call to action -->
<ol class="breadcrumb">

   <li class="active">Nuevo Punto de Equilibrio</li>
 </ol>


   <div class="page-header">
     <h1>Nuevo Punto de Equilibrio</h1>
   </div>
@include('partials.messages')
   <div class="row">
     <div class="col-md-8">
        <div class="panel panel-default">
          <div class="panel-heading">
            Nuevo
           </div>
          <div class="panel-body">
 {!!Form::open(['route'=>'punto.store','method'=>'POST'])!!}

	      <div class="form-group">
                  {!!form::label('Costo Fijo')!!}
                  {!!form::text('costofijo',null,['id'=>'costofijo
                  ','class'=>'form-control','placeholder'=>'Digite el Costo Fijo'])!!}
             </div>

         <div class="form-group">
                       {!!form::label('Costo Variable')!!}
                       {!!form::text('costovariable',null,['id'=>'costovariable
                       ','class'=>'form-control','placeholder'=>'Digite el Costo Variable'])!!}
              </div>
          <div class="form-group">
                            {!!form::label('Precio Venta')!!}
                            {!!form::text('precioventa',null,['id'=>'precioventa
                            ','class'=>'form-control','placeholder'=>'Digite El Precio de Venta'])!!}
              </div>
          <div class="form-group">
                                 {!!form::label('Cantidad Producida')!!}
                                 {!!form::text('cantidad',null,['id'=>'cantidad
                                 ','class'=>'form-control','placeholder'=>'Digite la Cantidad Producida'])!!}
            </div>

                 {!!form::submit('Calcular',
                 ['name'=>'calcular','id'=>'calcular',
                 'content'=>'<span>Calcular</span>',
                 'class'=>'btn btn-warning btn-sm m-t-10'])!!}
                 <button type='button' id='cancelar'
                  class='btn btn-default btn-sm m-t-10'>Cancelar</button>
                 {!!Form::close()!!}

          </div>
        </div>
        <script>
          $("#cancelar").click(function(event)
          {
              document.location.href = "{{ route('punto.index')}}";
          });
        </script>

     </div>
   </div>


@endsection
