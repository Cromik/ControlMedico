<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HistorialPaciente;
use App\Retorno;

class MiHistorialController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('mihistorial.index')->with([
            'mihistorial' => HistorialPaciente::all()
        ]);
    }

    public function all()
    {
        return "Hola";
    }


    public function create()
    {
        return view('mihistorial.create');
    }


    public function store(Request $request)
    {

        if ($request->ajax()) {

            $historial = HistorialPaciente::create(
                request()->all()
            );

            $retorno = array(
                'CodigoRetorno'  => '0',
                'MensajeRetorno' => 'Ok'
            );

            return $retorno;
        } else {
            $retorno = array(
                'CodigoRetorno'  => '1',
                'MensajeRetorno' => 'Error'
            );

            return $retorno;
        }
    }



    /*
    public function storeJson()
    {
        $historial = HistorialPaciente::create([
            'id' => request()-> ids,
            'descripcion' => request()->descripcion,
            'implemento' => request()->implemento,
        ]);
        return $historial;
    }
    */

    public function store__()
    {
        $historial = HistorialPaciente::create([
            'id' => request()->ids,
            'descripcion' => request()->descripcion,
            'implemento' => request()->implemento,
        ]);
        return $historial;
    }
}
