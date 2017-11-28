@extends('layouts.master')

@section('title','Punto de Equilibrio')

@section('content')

   <!-- Main component for a primary marketing message or call to action -->

   <div class="page-header">
     <h1>Punto de Equilibrio</h1>
   </div>
@include('partials.messages')
   <div class="row">
     <div class="col-md-8">
        <div class="panel panel-default">
          <div class="panel-heading">
             Lista de resultados
             <p class="navbar-text navbar-right" style=" margin-top: 1px;">
                <button type="button" id='nuevo' name='nuevo'
                 class="btn btn-info navbar-btn"
                  style="margin-bottom: 1px;
                  margin-top: -5px;
                  margin-right: 8px;padding: 3px 20px;">Nuevo</button>

             </p>
           </div>
          <div class="panel-body">

             <table class="table table-bordered">
               <thead>
                  <th>Costos Fijos</th>
                  <th>Costos Variables</th>
                  <th>Precio de Venta</th>
                  <th>Cantidad Producida</th>
                  <th>Ventas</th>
                  <th>Costos Totales</th>
                  <th>Punto de Equilibrio</th>
                  <th>Acciones</th>
               </thead>
               <tbody>
              @foreach($puntos as $punto)
               <tr>
                     <td>{{$punto->costofijo}}</td>
                     <td>{{$punto->costovariable}}</td>
                     <td>{{$punto->precioventa}}</td>
                     <td>{{$punto->cantidad}}</td>
                     <td>{{$punto->iventa}}</td>
                     <td>{{$punto->costototal}}</td>
                     <td>{{$punto->pq}}</td>

                     <td>
                       <a href="{{URL::action('PuntoEquilibrioController@edit',
             $punto->idpunto)}}"><button class="btn btn-warning btn-sm m-t-10"><i class="glyphicon  glyphicon-edit"></i> Editar</button></a>
                         <a href="" data-target="#modal-delete-{{$punto->idpunto}}" data-toggle="modal"><button class="btn btn-danger btn-sm m-t-10">
                         <i class="glyphicon glyphicon-remove"></i> Eliminar</button></a>
                    </td>
                    @include('punto.modal')

                    </tr>
                        @endforeach
                     </tbody>
             </table>
            </div>
        </div>
      
     </div>
   </div>
<script>
$('#nuevo').click(function(event){
    document.location.href="{{route('punto.create')}}";
});
</script>

@endsection
