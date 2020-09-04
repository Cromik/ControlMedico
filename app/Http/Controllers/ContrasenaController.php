<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ContrasenaController extends Controller
{
    public function index()
    {
        return view('contrasena.index');
    }

    public function store(Request $request)
    {
        $usuario = User::findOrFail($request['identificacion']);
        $usuario->password = Hash::make($request['password']);
        $usuario->save();

        $retorno = array(
            'CodigoRetorno'  => '0',
            'MensajeRetorno' => 'Usuario Actualizado.'
        );

        return $retorno;
    }
}
