<?php

namespace App\Http\Controllers;

use App\Empleados;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class apiController extends Controller
{
    //
    public function empleados()
    {
        $empleados = Empleados::select('name', 'surname', 'email', 'dni', 'address', 'phone', 'photo') -> get();
        
        return ($empleados);
    }

}
