<?php

namespace SoftwareFinanciero\Http\Controllers;

use Illuminate\Http\Request;

use SoftwareFinanciero\Http\Requests;
use SoftwareFinanciero\Razones;
use Session;
use Illuminate\Support\Facades\Redirect;
use DB;

class RazonesController extends Controller
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

     $razones= Razones::select(
       'razon.activocorriente','razon.pasivocorriente',
       'razon.inventario','razon.activototal',
       'razon.deudatotal','razon.venta',
       'razon.cuentapcobrar','razon.activofijo',
     'razon.liquidez','razon.pruebaacida',
     'razon.endeudamiento','razon.rotacion','razon.diaspc','razon.raf','razon.rat')->paginate(2);
     return view('razones.index')->with('razones',$razones);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('razones.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $razon = new Razones;
    	  $activocorriente=$request->get('activocorriente');
        $pasivocorriente=$request->get('pasivocorriente');
        $inventario=$request->get('inventario');
        $activototal=$request->get('activototal');
        $deudatotal=$request->get('deudatotal');
        $venta=$request->get('venta');
        $cuentapcobrar=$request->get('cuentapcobrar');
        $activofijo=$request->get('activofijo');

        $razon->activocorriente=$request->get('activocorriente');
        $razon->pasivocorriente=$request->get('pasivocorriente');
        $razon->inventario=$request->get('inventario');
        $razon->activototal=$request->get('activototal');
        $razon->deudatotal=$request->get('deudatotal');
        $razon->venta=$request->get('venta');
        $razon->cuentapcobrar=$request->get('cuentapcobrar');
        $razon->activofijo=$request->get('activofijo');

        $razon->liquidez=razonL($activocorriente,$pasivocorriente);
        $razon->pruebaacida=ranzonR($activocorriente,$inventario,$pasivocorriente);
        $razon->rotacion=rotacionInvntario($venta,$inventario);
        $razon->diaspc=dso($cuentapcobrar,$venta);
        $razon->raf=rotacionAF($venta,$activofijo);
        $razon->rat=rotacionAT($venta,$activototal);
        $razon->endeudamiento=razonD($deudatotal,$activototal);
        $razon->save();
        return redirect()->route('razones.index');
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
        $razones= Razones::select(
          'razon.activocorriente',
          'razon.pasivocorriente',
          'razon.inventario',
          'razon.activototal',
          'razon.deudatotal',
          'razon.venta',
          'razon.cuentapcobrar',
          'razon.activofijo',
        'razon.liquidez',
        'razon.pruebaacida',
        'razon.endeudamiento',
        'razon.rotacion'
        ,'razon.diaspc',
        'razon.raf',
        'razon.rat')
        ->get();
          return view("razones.edit",["razones"=>$razones]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        return  view("razones.edit", ["razon"=>Razones::findOrFail($id)]);
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
      $affectedRows = Razones::where('idrazon','=',$id)
              ->update([

                  'activocorriente'=>$request->get('activocorriente'),
                  'pasivocorriente'=>$request->get('pasivocorriente'),
                  'inventario'=>$request->get('inventario'),
                  'activototal'=>$request->get('activototal'),
                  'deudatotal'=>$request->get('deudatotal'),
                  'venta'=>$request->get('venta'),
                  'cuentapcobrar'=>$request->get('cuentapcobrar'),
                  'activofijo'=>$request->get('activofijo'),

                ]
              );
              return Redirect::to('razones');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $affectedRows = Razones::where('idrazon','=',$id)->delete();
      return Redirect::to('razones');
    }
}
