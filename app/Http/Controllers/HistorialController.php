<?php

namespace App\Http\Controllers;

use App\HistorialPaciente;
use App\User;
use Illuminate\Support\Facades\DB;



class HistorialController extends Controller
{

    public function index()
    {
        //$historial = DB::table('historial_pacientes')->get();
        //$historial = HistorialPaciente::all();
        //dd($historial);
        return view('historial.index')->with([
            'paciente' => User::all(),
            //'cita' => Cita::all();
            ]);
    }


    public function show($historial)
    {
        //$historial = DB::table('historial_pacientes')->where('id', $historial)->get();
        $historial =  HistorialPaciente::find($historial);

        dd($historial);
        return view('historial.show')->with([
            'historial' => $historial
        ]);
    }

    public function create()
    {

        return view('historial.index');
    }


    public  function paciente($paciente){
        return view('historial.paciente')->with([
            'mihistorial' => HistorialPaciente::all()
        ]);
    }
}
