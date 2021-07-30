<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medida;

class MedidasController extends Controller
{
    public function getMedidas()
    {

        $medidas = Medida::all();
        return $medidas;
    }

    public function crearMedida(Request $request)
    {
        $input = $request->all();
        $producto = new Medida();
        $producto->fecha = $input["fecha"];
        $producto->hora = $input["hora"];
        $producto->medidor = $input["medidor"];
        $producto->valor = $input["valor"];
        $producto->acciones = $input["acciones"];

        $producto->save();
        return $producto;
    }
}
