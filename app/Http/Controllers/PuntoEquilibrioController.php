<?php

namespace SoftwareFinanciero\Http\Controllers;

use Illuminate\Http\Request;

use SoftwareFinanciero\Http\Requests;
use SoftwareFinanciero\PuntoEq;
use Illuminate\Support\Facades\Redirect;
use Session;
use DB;


class PuntoEquilibrioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function __construct()
    {

    }
    public function index()
    {
        $puntos=PuntoEq::select(
        'punto.idpunto',
        'punto.costofijo',
        'punto.costovariable',
        'punto.costototal',
        'punto.cantidad',
        'punto.precioventa',
        'punto.iventa',
        'punto.pq')
        ->get();
        return view('punto.index')->with('puntos',$puntos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('punto.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $puntos=new PuntoEq;
      $costofijo=$request->get('costofijo');
      $costovariable=$request->get('costovariable');
      $precioventa=$request->get('precioventa');
      $cantidad=$request->get('cantidad');

      $puntos->costofijo=$request->get('costofijo');
      $puntos->costovariable=$request->get('costovariable');
      $puntos->precioventa=$request->get('precioventa');
      $puntos->cantidad=$request->get('cantidad');

      $puntos->costototal=costoT($costovariable,$costofijo,$cantidad);
      $puntos->iventa=ingresoV($precioventa,$cantidad);
      $puntos->pq=puntoEquilibrio($precioventa,$costofijo,$costovariable);
      $puntos->save();
       return redirect()->route('punto.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $punto=PuntoEq::select(
        'punto.idpunto',
        'punto.costofijo',
        'punto.costovariable',
        'punto.costototal',
        'punto.cantidad',
        'punto.precioventa',
        'punto.iventa',
        'punto.pq')
        ->get();
          return View("punto.edit",["punto"=>$punto]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      return  view("punto.edit", ["punto"=>PuntoEq::findOrFail($id)]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $affectedRows = PuntoEq::where('idpunto','=',$id)
              ->update([

                  'costofijo'=>$request->get('costofijo'),
                  'costovariable'=>$request->get('costovariable'),
                  'precioventa'=>$request->get('precioventa'),
                  'cantidad'=>$request->get('cantidad'),
                ]
              );
              return Redirect::to('index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $affectedRows = PuntoEq::where('idpunto','=',$id)->delete();
      return Redirect::to('punto');
    }
}
