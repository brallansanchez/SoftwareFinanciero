@extends('layouts.master')

@section('title','Calcular Razones')

@section('content')
<html>
<head>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['line']});
      google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

      var data = new google.visualization.DataTable();
      data.addColumn('number', 'Numero de Unidades');
      data.addColumn('number', 'Costos Fijos');
      data.addColumn('number', 'Costos Totales');
      data.addColumn('number', 'Ingresos por Venta');

      data.addRows([
        /*
*/
        @foreach($grfl as $gf)
        [{{$gf->cantidad}},  {{$gf->costofijo}}, {{$gf->costototal}}, {{$gf->iventa}}],
        [{{$gf->cantidad}},   {{$gf->costofijo}}, {{$gf->costototal}}, {{$gf->iventa}}],
        [{{$gf->cantidad}}, {{ $gf->costofijo}},  {{$gf->costototal}},{{ $gf->iventa}}],
        [{{$gf->cantidad}},  {{ $gf->costofijo}}, {{$gf->costototal}}, {{$gf->iventa}}],
        [{{$gf->cantidad}},  {{$gf->costofijo}}, {{$gf->costototal}}, {{$gf->iventa}}],
        [{{$gf->cantidad}},   {{$gf->costofijo}},{{ $gf->costototal}},  {{$gf->iventa}}],
        [{{$gf->cantidad}},    {{$gf->costofijo}},{{ $gf->costototal}},  {{$gf->iventa}}],
        [{{$gf->cantidad}},   {{$gf->costofijo}}, {{$gf->costototal}}, {{$gf->iventa}}],
        [{{$gf->cantidad}},  {{ $gf->costofijo}}, {{$gf->costototal}}, {{$gf->iventa}}],
        [{{$gf->cantidad}},  {{$gf->costofijo}}, {{$gf->costototal}}, {{$gf->iventa}}],
        [{{$gf->cantidad}},  {{$gf->costofijo}}, {{ $gf->costototal}},  {{$gf->iventa}}],
        [{{$gf->cantidad}},   {{$gf->costofijo}},  {{$gf->costototal}},  {{$gf->iventa}}],
        @endforeach
      ]);

      var options = {
        chart: {
          title: 'Representacion Grafica del Punto de Equilibrio',
          subtitle: 'en miles de dolares (USD)'

        },
        width: 1200,
        height: 600,
        axes: {
          x: {
            0: {side: 'bottom'}
          },

        }
      };

      var chart = new google.charts.Line(document.getElementById('line_top_x'));

      chart.draw(data, google.charts.Line.convertOptions(options));
    }
  </script>
</head>
<body>
  <div id="line_top_x"></div>
</body>
</html>

@endsection
