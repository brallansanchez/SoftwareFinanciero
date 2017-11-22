@extends('layouts.master')

@section('title','Editar Producto')

@section('content')
<!-- Main component for a primary marketing message or call to action -->
   <ol class="breadcrumb">
     <li><a href="{{url('dashboard')}}">Escritorio</a></li>
     <li><a href="{{url('dashboard')}}">Productos</a></li>
    <li class="active">Editar Producto</li>

   </ol>


   <div class="row">
     <div class="col-md-8">

        <div class="panel panel-default">
          <div class="panel-heading">
            Eliminar
           </div>
          <div class="panel-body">
 {!!Form::open(['route'=>['product.destroy',$product->id],'method'=>'DELETE'])!!}
              <div class="form-group">
               <label for="exampleInputPassword1">DESA ELIMINAR ESTE REGISTRO</label>
                   </div>
             <div class="form-group">
                {!!form::label('Producto')!!}
                {!!$product->name!!}
             </div>
               <div class="form-group">
                {!!form::label('Precio')!!}
                {!!$product->price!!}
             </div>
                 {!!form::submit('Eliminar',['name'=>'grabar','id'=>'grabar','content'=>'<span>Grabar</span>','class'=>'btn btn-warning btn-sm m-t-10'])!!}
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
