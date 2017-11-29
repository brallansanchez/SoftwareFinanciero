@extends('layouts.master')

@section('title','Editar')

@section('content')
<!-- Main component for a primary marketing message or call to action -->
   <ol class="breadcrumb">
     <li><a href="{{url('dashboard')}}">Principal</a></li>
    <li class="active">Editar Informacion</li>
   </ol>
   <div class="page-header">
     <h1>Editar Datos</h1>
   </div>

{!!Form::model($punto,['method'=>'PATCH','route'=>['punto.update',$punto->idpunto]])!!}
{{Form::token()}}

<div class="row">
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">


         <div class="form-group">
               <label for="">Costo Fijo</label>
               <input type="text" name="costofijo"
               required value="{{$punto->costofijo}}"
               class="form-control" placeholder="Digite el Costo Fijo">
         </div>
         <div class="form-group">
               <label for="costovariable">Costo Variable</label>
               <input type="text" name="costovariable"
               required value="{{$punto->costovariable}}"
               class="form-control" placeholder="Digite el Costo Variable">
         </div>
         <div class="form-group">
               <label for="precioventa">Precio de Venta</label>
               <input type="text" name="precioventa"
               required value="{{$punto->precioventa}}"
               class="form-control" placeholder="Digite el Precio de Venta">
         </div>
         <div class="form-group">
               <label for="cantidad">Cantidad Producida</label>
               <input type="text" name="cantidad"
               required value="{{$punto->cantidad}}"
               class="form-control" placeholder="Digite la Cantidad producida">
         </div>
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

         <div class="form-group">
               <button class="btn btn-primary" >Guardar</button>
               <a href="{{url('index')}}" class="btn btn-default btn-sm m-t-10" role="button"> Cancelar</a>
         </div>

       </div>

   </div>
</div>


{!!Form::close()!!}
@endsection
