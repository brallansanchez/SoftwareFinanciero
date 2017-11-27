<?php

namespace SoftwareFinanciero\Http\Requests\Razones;

use SoftwareFinanciero\Http\Requests\Request;

class RazonesCreateRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
            'activocorriente'=>'required|min:0',
            'pasivocorriente'=>'required|min:0',
            'activofijo'=>'required|min:0',
            'activototal'=>'required|min:0',
            'deudatotal'=>'required|min:0',
            'inventario'=>'required|min:0',
            'venta'=>'required|min:0',
            'cuentapcobrar'=>'required|min:0',

        ];
    }
    public function messages(){
      return [
        'activocorriente.min'=>'debe ingresar el activo circulante',
        'pasivocorriente.min'=>'debe ingresar el pasivo circulante',
        'activofijo.min'=>'debe ingresar el activo fijo',
        'activototal.min'=>'debe ingresar el activo total',
        'deudatotal.min'=>'debe ingresar la deuda total',
        'inventario.min'=>'debe ingresar el inventario',
        'venta.min'=>'debe ingresar la venta',
        'cuentapcobrar.min'=>'debe ingresar la cuenta por cobrar',

      ];
    }
}
