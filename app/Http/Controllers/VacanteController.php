<?php

namespace App\Http\Controllers;

use App\Models\Vacante;
use Illuminate\Http\Request;

class VacanteController extends Controller
{
    public function index(){
        return view('vacantes.index');
    }

    public function create(Vacante $vacante){
        return view('vacantes.create', [
            'vacante' => $vacante
        ]);
    }
}
