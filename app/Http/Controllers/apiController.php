<?php

namespace App\Http\Controllers;

use App\User;
use App\Empleados;
use App\Roles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class apiController extends Controller
{
    //
    public function users()
    {
        $users = User::select('id', 'name', 'email', 'created_at') -> get();
        
        return ($users);
    }


    public function empleados()
    {
        $empleados = Empleados::select('id', 'name', 'surname', 'email', 'dni', 'roles_id', 'address', 'phone', 'photo') -> get();
        
        return ($empleados);
    }

    public function roles()
    {
        $roles = Roles::select('id', 'name', 'description') -> get();
        
        return ($roles);
    }

}
