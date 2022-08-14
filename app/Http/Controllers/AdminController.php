<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Enfermedades;
use App\Models\Sintoma;

class AdminController extends Controller
{
    public function index(){
		
		$virus=Enfermedades::all();
		
		$sintomas=Sintoma::all();
		
		return view('admin.index',compact('virus','sintomas'));
	}	
}
