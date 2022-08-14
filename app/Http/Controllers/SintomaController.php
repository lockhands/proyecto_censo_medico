<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Enfermedades;
use App\Models\Sintoma;

use Illuminate\Http\Request;

class SintomaController extends Controller
{
    
	public function create_sintomas(User $user){
	
		/*	Con esto lo que haría tanto enviar enfermedades
			Como enviar también sintomas*/
		
		
			$virus=new Enfermedades();
			
			
			$sintomas=new Sintoma();
		
			
			
		
		return view('users.sintomas',compact('user','virus','sintomas'));
		
		
	}
	
	
	public function store_sintoma(Request $request,User $user){
	
	/*	
	Ejemplo si quisiera modificar un elemento de user
	$user->virus=$request->virus;
		
		$user->save();
		*/
		$ok=1;
		/*if(isset($request->COVID_19)) {
		
			$users =User::find($user->id);
			
			$users->
		
		}
		
		if(isset($request->Viruela_del_mono)) $ok=0;
		
		if(isset($request->Variente_del_COVID)) $ok=0;
		
		*/
		
		$useraux=User::find($user->id);
		$useraux->centro_medico=$request->centro_medico;
		$useraux->update();
		
		
		//Verificamos si esta definida un objeto request con esa variable
		
		if(isset($request->fiebre)){
			$user->sintoma()->attach($request->fiebre);
		}
		if(isset($request->erupciones_en_la_piel)){
			$user->sintoma()->attach($request->erupciones_en_la_piel);	
		}
		if(isset($request->tos)){
			$user->sintoma()->attach($request->tos);	
		}
		if(isset($request->dolores_musculares)){
			$user->sintoma()->attach($request->dolores_musculares);	
		}
		if(isset($request->dolor_de_cabeza)){
			$user->sintoma()->attach($request->dolor_de_cabeza);	
		}
		if(isset($request->vómito)){
			$user->sintoma()->attach($request->vómito);	
		}
		
		//Verificamos si esta definido un objeto request que tenga como variable una enfermedades
		
		if(isset($request->COVID_19)){
			$user->enfermedad()->attach($request->COVID_19);
		}
		if(isset($request->Viruela_del_mono)){
			$user->enfermedad()->attach($request->Viruela_del_mono);	
		}
		if(isset($request->Variante_del_COVID)){
			$user->enfermedad()->attach($request->Variante_del_COVID);	
		}
		
		if(isset($request->nuevo_sintoma)){
		
		$sintomas=new Sintoma();
		$sintomas->nombre=$request->nuevo_sintoma;
		
		$sintomas->save();
		}
		
		
	
		
		return redirect()->route('users.index',compact('user'));
	}
}
