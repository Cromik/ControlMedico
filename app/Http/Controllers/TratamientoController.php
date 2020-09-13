<?php

namespace App\Http\Controllers;

use App\Agendar;
use Illuminate\Http\Request;

class TratamientoController extends Controller
{
    public function index()
    {
        return view('mantenimiento.tratamiento');
    }
}
