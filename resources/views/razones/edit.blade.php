@extends('layouts.master')

@section('title','Editar Razones')

@section('content')
<!-- Main component for a primary marketing message or call to action -->
   <ol class="breadcrumb">
     <li><a href="{{url('dashboard')}}">Principal</a></li>
    <li class="active">Editar Informacion de Razones</li>
   </ol>
   <div class="page-header">
     <h1>Editar Datos de Razones</h1>
   </div>

   {!!Form::model($razon,['method'=>'PATCH','route'=>['razon.update',$razon->idrazon]])!!}
   {{Form::token()}}

<div class="row">
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">


         <div class="form-group">
               <label for="activocorriente">Activo Circulante</label>
               <input type="text" name="activocorriente"
               required value="{{$razon->activocorriente}}"
               class="form-control" placeholder="Digite el activo Circulante">
         </div>
         <div class="form-group">
               <label for="activofijo">Activo Fijo</label>
               <input type="text" name="activofijo"
               required value="{{$razon->activofijo}}"
               class="form-control" placeholder="Digite el activo Fijo">
         </div>
         <div class="form-group">
               <label for="pasivocorriente">Pasivo Circulante</label>
               <input type="text" name="pasivocorriente"
               required value="{{$razon->pasivocorriente}}"
               class="form-control" placeholder="Digite el Pasivo Circulante">
         </div>
         <div class="form-group">
               <label for="inventario">Inventario</label>
               <input type="text" name="inventario"
               required value="{{$razon->inventario}}"
               class="form-control" placeholder="Digite el Inventario">
         </div>
         <div class="form-group">
               <label for="activototal">Activo Total</label>
               <input type="text" name="activototal"
               required value="{{$razon->activototal}}"
               class="form-control" placeholder="Digite el activo Total">
         </div>
         <div class="form-group">
               <label for="deudatotal">Deuda Total</label>
               <input type="text" name="deudatotal"
               required value="{{$razon->deudatotal}}"
               class="form-control" placeholder="Digite la Deuda">
         </div>
         <div class="form-group">
               <label for="venta">Venta</label>
               <input type="text" name="venta"
               required value="{{$razon->venta}}"
               class="form-control" placeholder="Digite La Venta">
         </div>
         <div class="form-group">
               <label for="cuentapcobrar">Cuenta por Cobrar</label>
               <input type="text" name="cuentapcobrar"
               required value="{{$razon->cuentapcobrar}}"
               class="form-control" placeholder="Digite la Cuenta por Cobrar">
         </div>

      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

         <div class="form-group">
               <button class="btn btn-primary" type="submit"><i class="btn btn-warning btn-sm m-t-10'"></i> Guardar</button>
               <a href="{{url('index')}}" class="class='btn btn-default btn-sm m-t-10'" role="button"><i></i> Cancelar</a>
         </div>

       </div>

   </div>
</div>


{!!Form::close()!!}
@endsection
