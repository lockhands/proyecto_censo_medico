<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Enfermedades;
use App\Models\Sintoma;
use App\Models\Notification;
use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;

class UserController extends Controller
{
	public function index(User $user){
		
		
		$noticias=Post::all();
		
		return view('users.index',compact('noticias','user'));
	}

    public function show(Request $request){
		
		
		
		$user=User::find($request->id);
		
		
		return view('users.show',compact('user'));
	}
	
	public function create(){
	
		return view('users.create');
	}
	
	public function create_menor(User $user){
		
	
		
		return view('users.create_menor',compact('user'));
	}
	
	public function store_menor(Request $request,User $user){
	
		
			$request->validate([
			'cedula' => 'required|numeric'
		]);
	
		
		$useraux=User::find($user->id);
		$useraux->nombre=$request->nombre;
		$useraux->apellido=$request->apellido;
		$useraux->clave=$request->clave;
		$useraux->cedula=$request->cedula;
		$useraux->correo=$request->correo;
		$useraux->dire_municipio=$request->dire_municipio;
		$useraux->dire_localidad=$request->dire_localidad;
		$useraux->tele_fijo=$request->tele_fijo;
		$useraux->tele_movil=$request->tele_movil;
		$useraux->centro_medico="N/D";
		$useraux->admin="0";
	
		$useraux->update();
		
		return redirect()->route('welcome');
	
		
		
	}
	
	public function store_personal(User $user){
		$age=18;
		return view('users.create_menor',compact('user','age'));
	}
	
	public function store(Request $request){
		
		
		$user=new User();
		$user->nombre= "N/D";
		$user->apellido="N/D";
		$user->clave=$request->clave;
		$user->cedula="N/D";
		$user->correo=$request->correo;
		$user->dire_municipio="N/D";
		$user->dire_localidad="N/D";
		$user->tele_fijo="N/D";
		$user->tele_movil="N/D";
		$user->centro_medico="N/D";
		$user->admin="0";
	
		$user->save();
		
		
		
		if(isset($request->age)){
			return redirect()->route('users.menor.create',compact('user'));
		}
		else{
			return redirect()->route('users.store.personal',compact('user'));
		}
		
	}
	
	public function login(){
	
		return view('users.login');
	}		
	
	public function search(){
			
		return view('users.search');
		
	}	
	
	
	public function loged(Request $request){
		
		$user =User::where('correo',$request->correo)->first();
		
		
			return redirect()->route('create.sintomas',compact('user'));	

		
	}
}
