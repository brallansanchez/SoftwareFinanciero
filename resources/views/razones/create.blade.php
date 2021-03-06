@extends('layouts.master')

@section('title','Lista de Razones')

@section('content')
<!-- Main component for a primary marketing message or call to action -->
<ol class="breadcrumb">

   <li class="active">Nuevos Datos de Razones Financieras</li>
 </ol>


   <div class="page-header">
     <h1>Razon Nueva</h1>
   </div>
@include('partials.messages')
   <div class="row">
     <div class="col-md-8">
        <div class="panel panel-default">
          <div class="panel-heading">
            Nuevo
           </div>
          <div class="panel-body">
            {!!Form::open(['route'=>'razones.store','method'=>'POST'])!!}
            <div class="form-group">
                      {!!form::label('Activo Circulante')!!}
                      {!!form::text('activocorriente',null,['id'=>'activocorriente
                      ','class'=>'form-control','placeholder'=>'Digite el Activo Circulante'])!!}
           </div>
           <div class="form-group">
                     {!!form::label('Pasivo Circulante')!!}
                     {!!form::text('pasivocorriente',null,['id'=>'pasivocorriente
                     ','class'=>'form-control','placeholder'=>'Digite el Pasivo Circulante'])!!}
                </div>
                <div class="form-group">
                          {!!form::label('Inventario')!!}
                          {!!form::text('inventario',null,['id'=>'inventario
                          ','class'=>'form-control','placeholder'=>'Digite el Inventario'])!!}
                     </div>
                     <div class="form-group">
                               {!!form::label('Activo Total')!!}
                               {!!form::text('activototal',null,['id'=>'activototal
                               ','class'=>'form-control','placeholder'=>'Digite el Activo Total'])!!}
                          </div>
                          <div class="form-group">
                                    {!!form::label('Deuda Total')!!}
                                    {!!form::text('deudatotal',null,['id'=>'deudatotal
                                    ','class'=>'form-control','placeholder'=>'Digite la Deuda Total'])!!}
                               </div>
                               <div class="form-group">
                                         {!!form::label('Venta')!!}
                                         {!!form::text('venta',null,['id'=>'venta
                                         ','class'=>'form-control','placeholder'=>'Digite la Venta'])!!}
                                    </div>
                                    <div class="form-group">
                                              {!!form::label('Cuentas por Cobrar')!!}
                                              {!!form::text('cuentapcobrar',null,['id'=>'cuentapcobrar
                                              ','class'=>'form-control','placeholder'=>'Digite las Cuentas por Cobrar'])!!}
                                         </div>
                                         <div class="form-group">
                                                   {!!form::label('Activo Fijo')!!}
                                                   {!!form::text('activofijo',null,['id'=>'activofijo
                                                   ','class'=>'form-control','placeholder'=>'Digite el Activo Fijo'])!!}
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
