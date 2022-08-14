<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use App\Models\User;
use Illuminate\Http\Request;

class NewsController extends Controller
{
     public function create(){
		
		
		return view('notificacion.create');
	}
	
	public function store(request $request){
		
		$notification= new Notification();
		
		$notification->mensaje=$request->mensaje;
		
		$notification->save();
		
		$user=User::find($request->id);
		
		$user->notification()->attach($notification->id);
		
		return $user;
	}
}
