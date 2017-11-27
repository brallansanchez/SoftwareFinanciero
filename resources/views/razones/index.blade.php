@extends('layouts.master')

@section('title','Lista de Razones')

@section('content')

   <!-- Main component for a primary marketing message or call to action -->

   <div class="page-header">
     <h1>Razones Financieras</h1>
   </div>
@include('partials.messages')
   <div class="row">
     <div class="col-md-8">
        <div class="panel panel-default">
          <div class="panel-heading">
             Lista de resultados
             <p class="navbar-text navbar-right" style=" margin-top: 1px;">
                <button type="button" id='nuevo' name='nuevo' class="btn btn-warning navbar-btn" style="margin-bottom: 1px; margin-top: -5px;margin-right: 8px;padding: 3px 20px;">Nuevo</button>
             </p>
           </div>
          <div class="panel-body">

             <table class="table table-bordered">
               <thead>
                  <th>Razon de liquidez</th>
                  <th>Razon de Prueba Acida</th>
                  <th>Razon de Deuda</th>
                  <th>Razon de Rotacion de Activos</th>
                  <th>Dias Pendiente de Cobro</th>
                  <th>Rotacion de Activo Fijo</th>
                  <th>Rotacion de Activos Totales</th>
                  <th>Accion</th>
               </thead>
               <tbody>
              @foreach($razones as $razon)
               <tr>
                     <td>{{$razon->liquidez}}</td>
                     <td>{{$razon->pruebaacida}}</td>
                     <td>{{$razon->endeudamiento}}</td>
                     <td>{{$razon->rotacion}}</td>
                     <td>{{$razon->diaspc}}</td>
                     <td>{{$razon->raf}}</td>
                     <td>{{$razon->rat}}</td>

                     <td><button class="btn btn-xs btn-danger"
                     style="margin-bottom: 1px;
                     margin-top: -5px;
                     margin-right: 8px;padding: 3px 10px;"
                        href="{{route('razones.show',$razon->idrazon)}}">Eliminar</button>
                    <!-- <a href="{{route('razones.show',$razon)}}">[Eliminar]</a>--></td>
                  </tr>
                  @endforeach
               </tbody>


             </table>
             <div class='text-center'>
              {!!$razones->links()!!}
           </div>

          </div>
        </div>


     </div>
   </div>
<script>
$('#nuevo').click(function(event){
    document.location.href="{{route('razones.create')}}";
});
</script>

@endsection
