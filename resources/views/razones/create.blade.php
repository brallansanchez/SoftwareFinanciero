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
           {!!Form::open(array('url'=>'razones','method'=>'POST','autocomplete'=>'off'))!!}
              {{Form::token()}}

              <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">


                       <div class="form-group">
                             <label for="activocorriente">Activo Circulante</label>
                             <input type="text" name="activocorriente"
                             required value="{{old('activocorriente')}}"
                             class="form-control" placeholder="Digite el activo Circulante">
                       </div>
                       <div class="form-group">
                             <label for="activocorriente">Activo Fijo</label>
                             <input type="text" name="activofijo"
                             required value="{{old('activofijo')}}"
                             class="form-control" placeholder="Digite el activo Fijo">
                       </div>
                       <div class="form-group">
                             <label for="pasivocorriente">Pasivo Circulante</label>
                             <input type="text" name="pasivocorriente"
                             required value="{{old('pasivocorriente')}}"
                             class="form-control" placeholder="Digite el Pasivo Circulante">
                       </div>
                       <div class="form-group">
                             <label for="inventario">Inventario</label>
                             <input type="text" name="inventario"
                             required value="{{old('inventario')}}"
                             class="form-control" placeholder="Digite el Inventario">
                       </div>
                       <div class="form-group">
                             <label for="activototal">Activo Total</label>
                             <input type="text" name="activototal"
                             required value="{{old('activototal')}}"
                             class="form-control" placeholder="Digite el activo Total">
                       </div>
                       <div class="form-group">
                             <label for="deudatotal">Deuda Total</label>
                             <input type="text" name="deudatotal"
                             required value="{{old('deudatotal')}}"
                             class="form-control" placeholder="Digite la Deuda">
                       </div>
                       <div class="form-group">
                             <label for="venta">Venta</label>
                             <input type="text" name="venta"
                             required value="{{old('venta')}}"
                             class="form-control" placeholder="Digite La Venta">
                       </div>
                       <div class="form-group">
                             <label for="cuentapcobrar">Cuenta por Cobrar</label>
                             <input type="text" name="cuentapcobrar"
                             required value="{{old('cuentapcobrar')}}"
                             class="form-control" placeholder="Digite la Cuenta por Cobrar">
                       </div>



                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                       <div class="form-group">
                             <button class="btn btn-primary" type="submit"><i></i> Guardar</button>

                       </div>
                       <button type="submit"  href="{{url('razones')}}"
                        name="button" class="btn btn-danger">Cancelar</button>
                     </div>

                 </div>
              </div>

           {!!Form::close()!!}
@endsection
