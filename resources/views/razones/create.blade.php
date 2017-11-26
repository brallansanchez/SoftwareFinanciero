@extends('layouts.master')

@section('title','Calcular Razones')

@section('content')
<!-- Main component for a primary marketing message or call to action -->
<ol class="breadcrumb">

   <li class="active">Nuevos Datos de Razones Financieras</li>
 </ol>


   <div class="page-header">
     <h1>Razon Nueva</h1>
   </div>

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
                  ','class'=>'form-control','placeholder'=>'Digite El Activo Circulante'])!!}
             </div>
             <div class="form-group">
                       {!!form::label('Pasivo Circulante')!!}
                       {!!form::text('pasivocorriente',null,['id'=>'pasivocorriente
                       ','class'=>'form-control','placeholder'=>'Digite El Pasivo Circulante'])!!}
                  </div>
                  <div class="form-group">
                            {!!form::label('Inventario')!!}
                            {!!form::text('inventario',null,['id'=>'inventario
                            ','class'=>'form-control','placeholder'=>'Digite El inventario'])!!}
                       </div>
                       <div class="form-group">
                                 {!!form::label('Activo Total')!!}
                                 {!!form::text('activototal',null,['id'=>'activototal
                                 ','class'=>'form-control','placeholder'=>'Digite El Activo Total'])!!}
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
                                                {!!form::label('Activo Fijo')!!}
                                                {!!form::text('activofijo',null,['id'=>'activofijo
                                                ','class'=>'form-control','placeholder'=>'Digite El Activo Fijo'])!!}
                                           </div>
                                           <div class="form-group">
                                                     {!!form::label('Cuentas Por Cobrar')!!}
                                                     {!!form::text('cuentapcobrar',null,['id'=>'cuentapcobrar
                                                     ','class'=>'form-control','placeholder'=>'Digite El Monto de Cuentas por Cobrar'])!!}
                                                </div>

                 {!!form::submit('Calcular',['name'=>'calcular','id'=>'calcular','content'=>'<span>Calcular</span>','class'=>'btn btn-warning btn-sm m-t-10'])!!}
          {!!Form::close()!!}

          </div>
        </div>


     </div>
   </div>


@endsection
