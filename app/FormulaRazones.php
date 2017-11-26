<?php
function razonL($activocorriente,$pasivocorriente){
  $liquidez=$activocorriente/$pasivocorriente;
  return $liquidez;
}
function ranzonR($activocorriente,$inventario,$pasivocorriente){
  $numerador=$activocorriente-$inventario;
  $pruebaacida=$numerador/$pasivocorriente;
  return $pruebaacida;
}
function rotacionInvntario($venta,$inventario){
  $rotacion=$venta/$inventario;
  return $rotacion;
}
function dso($cuentapcobrar,$venta){
  $promedio=$venta/360;
  $diaspc=$cuentapcobrar/$promedio;
  return $diaspc;
}
function rotacionAF($venta,$activofijo){
  $raf=$venta/$activofijo;
  return $raf;
}
function rotacionAT($venta,$activototal){
  $rat=$venta/$activototal;
  return $rat;
}
function razonD($deudatotal,$activototal){
  $endeudamiento=$deudatotal/$activototal;
  return $endeudamiento;
}
