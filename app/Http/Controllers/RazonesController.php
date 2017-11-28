<?php

namespace SoftwareFinanciero\Http\Controllers;

use Illuminate\Http\Request;

use SoftwareFinanciero\Http\Requests;
use SoftwareFinanciero\Razones;
use SoftwareFinanciero\Http\Requests\Razones\RazonesCreateRequest;
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
    public function store(RazonesCreateRequest $request)
    {
        //

        $razones = new Razones;
    	  $activocorriente=$request->get('activocorriente');
        $pasivocorriente=$request->get('pasivocorriente');
        $inventario=$request->get('inventario');
        $activototal=$request->get('activototal');
        $deudatotal=$request->get('deudatotal');
        $venta=$request->get('venta');
        $cuentapcobrar=$request->get('cuentapcobrar');
        $activofijo=$request->get('activofijo');

        $razones->activocorriente=$request->get('activocorriente');
        $razones->pasivocorriente=$request->get('pasivocorriente');
        $razones->inventario=$request->get('inventario');
        $razones->activototal=$request->get('activototal');
        $razones->deudatotal=$request->get('deudatotal');
        $razones->venta=$request->get('venta');
        $razones->cuentapcobrar=$request->get('cuentapcobrar');
        $razones->activofijo=$request->get('activofijo');

        $razones->liquidez=razonL($activocorriente,$pasivocorriente);
        $razones->pruebaacida=ranzonR($activocorriente,$inventario,$pasivocorriente);
        $razones->rotacion=rotacionInvntario($venta,$inventario);
        $razones->diaspc=dso($cuentapcobrar,$venta);
        $razones->raf=rotacionAF($venta,$activofijo);
        $razones->rat=rotacionAT($venta,$activototal);
        $razones->endeudamiento=razonD($deudatotal,$activototal);
        $razones->save();
        Session::flash('save','Se han registrado los datos para las razones');
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
        $razon=DB::table('razon')
          ->select('activocorriente','pasivocorriente','inventario','activototal',
          'deudatotal','venta','cuentapcobrar','activofijo','liquidez','pruebaacida',
          'endeudamiento','rotacion','diaspc','raf','rat')
          ->get();
          return view("razones.edit",["razon"=>$razon]);
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
        return  view("razones.edit", ["razones"=>Razones::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RazonesCreateRequest $request, $id)
    {
      $affectedRows = Razon::where('idrazon','=',$id)
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
