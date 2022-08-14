<?php

namespace App\Http\Controllers;
use App\Models\Notification;
use App\Models\User;
use Illuminate\Http\Request;

class NotificacionController extends Controller
{
     public function create(){
		
		
		return view('notificacion.create');
	}
	
	public function store(request $request){
		
		$user_cedula=User::where('cedula',$request->cedula)->first();
		
		if(!$user_cedula==null){
				$request->request->add(['id' => $user_cedula->id]);
		}
		else{
			
			$aux=null;
			
			$request->validate([
		
			'cedula' => 'required|in:'.$aux,
		
			]);
			
		}
		
		
		$notification= new Notification();
		
		$notification->mensaje=$request->mensaje;
		
		$notification->save();
		
		$user=User::find($request->id);
		
		$user->notification()->attach($notification->id);
		
		return redirect()->route('admins.index');
	}
}
