<?php

namespace App\Http\Controllers;

use App\Paciente;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use PhpParser\Node\Expr\FuncCall;
use Yajra\Datatables\Facades\Datatables;

class PacienteController extends Controller
{
    public function index()
    {
        $paciente = User::all();
        return view('paciente.index', compact('paciente'));
    }

    public function indexjson()
    {
        return datatables()->of(User::all())->toJson()->toJson();
    }


    public function store(Request $request)
    {
        if ($request['id'] == 0) {
            User::create([
                'name' => $request['name'],
                'email' => $request['email'],
                'password' => Hash::make($request['password']),
                'identificacion' => $request['identificacion'],
                'nombres' => $request['nombres'],
                'apellidos' => $request['apellidos'],
                'telefono' => $request['telefono'],
                'domicilio' => $request['domicilio'],
                'genero' => $request['genero'],
                'estado' => 'ACTIVO',
            ]);

            $retorno = array(
                'CodigoRetorno'  => '0',
                'MensajeRetorno' => 'Usuario Creado.'
            );
        } else {
            $usuario = User::findOrFail($request['id']);
            $usuario->email = $request['email'];
            $usuario->identificacion = $request['identificacion'];
            $usuario->nombres = $request['nombres'];
            $usuario->apellidos = $request['apellidos'];
            $usuario->telefono = $request['telefono'];
            $usuario->domicilio = $request['domicilio'];
            $usuario->genero = $request['genero'];
            $usuario->save();

            $retorno = array(
                'CodigoRetorno'  => '0',
                'MensajeRetorno' => 'Usuario Actualizado.'
            );
        }
        return $retorno;
    }

    public function deletePaciente(Request $request)
    {
        $usuario = User::findOrFail($request['id']);
        $usuario->estado = 'INACTIVO';
        $usuario->save();

        $retorno = array(
            'CodigoRetorno'  => '0',
            'MensajeRetorno' => 'Usuario Actualizado.....'
        );
        return $retorno;
    }

    public function show($id)
    {
        return view('paciente.index')->with([
            'paciente' => User::find($id)
        ]);
    }

    public function getPacientes()
    {
        
        return json_encode($data = User::all(), JSON_UNESCAPED_UNICODE);
        //return $retorno;
    }

    public function getPaciente(Request $request)
    {
        if ($request['identificacion'] == "") {
            $paciente = User::all();
        } else {
            $filtro = $request['identificacion'];
            $paciente = User::where('identificacion', $filtro)->get();
        }
        $retorno = array(
            'CodigoRetorno'  => '0',
            'MensajeRetorno' => 'Usuario Actualizado.....',
            'paciente' => $paciente,
        );
        return $retorno;

        //return $retorno;
    }



    
}
