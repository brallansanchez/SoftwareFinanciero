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
<<<<<<< HEAD
        //
      
=======
     $razones= Razones::select(
       'razon.activocorriente','razon.pasivocorriente',
       'razon.inventario','razon.activototal',
       'razon.deudatotal','razon.venta',
       'razon.cuentapcobrar','razon.activofijo',
     'razon.liquidez','razon.pruebaacida',
     'razon.endeudamiento','razon.rotacion','razon.diaspc','razon.raf','razon.rat')->paginate(2);
     return view('razones.index')->with('razones',$razones);
>>>>>>> razones
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

        return view('razones.edit',array('razonez' =>$razones ));
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
