<!DOCTYPE html>
<html>
    <head>
        <title>ANF</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
         <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css">
         <link href="{{asset('css/bootstrap-grid.css')}}" rel="stylesheet" type="text/css">
         <link href="{{asset('css/bootstrap-reboot.css')}}" rel="stylesheet" type="text/css">
        <script type="text/javascript" src="{{asset('js/bootstrap.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/bootstrap.bundle.js')}}"></script>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="jumbotron"> <h1>Calculadora de Punto de Equilibrio</h1></div>
                <div class=" row">
                    <div class="activos col-md-12">
                        <h3>Calcule de forma sencilla la cantidad mínima de productos que debe vender para que su producción resulte rentable. El punto de equilibrio le mostrará la cantidad para la cual los ingresos totales se igualan a los costos. A partir de ese valor, comenzará a obtener beneficios con cada producto.</h3><hr>
                       
                             <form class="form-horizontal col-md-12" action="{{route('nuevoPunto')}}" method="post">
                                <label class="col-md-6">Costo Fijo Total</label>
                                <input type="number" class="form-control col-md-4" id="ventasNetas"  placeholder="Digite el saldo"><br>
                                <label class="col-md-6">Costo variable unitario</label>
                                <input type="number" class="form-control col-md-4" id="CostoArticulosVendidos"  placeholder="Digite el saldo"><br>
                                <label class="col-md-6">Precio de venta Unitario</label>
                                <input type="number" class="form-control col-md-4" id="UtilidadBrutaOperacion"  placeholder="Digite el saldo"><br>

                                <button type="submit" class="btn btn-lg btn-success pull-right">Calcular</button>
                            </form>
                        
                        
                    </div>


                </div>
            </div>
        </div>
    </body>
</html>
