<?php

namespace SoftwareFinanciero\Http\Controllers;

use Illuminate\Http\Request;

use SoftwareFinanciero\Http\Requests;
use SoftwareFinanciero\Razones;

class RazonesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     $razones= Razones::select(
       'razon.activocorriente','razon.pasivocorriente',
       'razon.inventario','razon.activototal',
       'razon.deudatotal','razon.venta',
       'razon.cuentapcobrar','razon.activofijo',
     'razon.liquidez','razon.pruebaacida',
     'razon.endeudamiento','razon.rotacion','razon.diaspc','razon.raf','razon.rat')->get();
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
    	  $razon->activocorriente=$request->get('activocorriente');
        $razon->pasivocorriente=$request->get('pasivocorriente');
        $razon->inventario=$request->get('inventario');
        $razon->activototal=$request->get('activototal');
        $razon->deudatotal=$request->get('deudatotal');
        $razon->venta=$request->get('venta');
        $razon->cuentapcobrar=$request->get('cuentapcobrar');
        $razon->activofijo=$request->get('activofijo');

        $razon->liquidez=razonL($razon->activocorriente,$razon->pasivocorriente);
        $razon->pruebaacida=ranzonR($razon->activocorriente,$razon->inventario,
        $razon->pasivocorriente);
        $razon->rotacion=rotacionInvntario($razon->venta,$razon->inventario);
        $razon->diaspc=dso($razon->cuentapcobrar,$razon->venta);
        $razon->raf=rotacionAF($razon->venta,$razon->activofijo);
        $razon->rat=rotacionAT($razon->venta,$razon->activototal);
        $razon->endeudamiento=razonD($razon->deudatotal,$razon->activototal);
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
        $razones = Razones::FindOrFail($id);
       return view('razones.show')->with('razones',$razones);
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
        $razones = Product::FindOrFail($id);
        return
        view('razones.edit');
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
        //
        $razones = Razones::FindOrFail($id);
        $input = $request->all();

        $razones->fill($input)->save();

        return redirect()->route('razones.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $razones = Razones::FindOrFail($id);
        $input = $request->all();

        $razones->fill($input)->destroy();

        return redirect()->route('razones.index');
    }
}
