@extends('layouts.master')

@section('title','Lista de Razones')

@section('content')

   <!-- Main component for a primary marketing message or call to action -->
   <div class="page-header">
     <h1>Razones Financieras</h1>
   </div>

   <div class="row">
     <div class="col-md-8">
@include('partials.message')
        <div class="panel panel-default">
          <div class="panel-heading">
             Lista
             <p class="navbar-text navbar-right" style=" margin-top: 1px;">
                <button type="button" id='nuevo' name='nuevo' class="btn btn-warning navbar-btn" style="margin-bottom: 1px; margin-top: -5px;margin-right: 8px;padding: 3px 20px;">Nuevo</button>
             </p>
           </div>
          <div class="panel-body">

             <table class="table table-bordered">
               <thead>
                  <th>Nombre</th>
                  <th>Precio</th>
                  <th>Marca</th>
                  <th>Acción</th>
               </thead>
               <tbody>
              @foreach($product as $product)
               <tr>
                     <td>{{$product->product}}</td>
                     <td>{{$product->price}}</td>
                     <td>{{$product->market}}</td>
                     <td><a href="{{route('product.edit',$product)}}">[Editar]</a>
                     <a href="{{route('product.show',$product)}}">[Eliminar]</a></td>
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
    document.location.href="{{route('product.create')}}";
});
</script>

@endsection
