<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\User;

class CheckRegistered
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
		
		$user =User::where('correo',$request->correo)->first();
		
		if($user==null){
		
		$aux=null;
	
		$request->validate([
		
			'correo' => 'required|in:'.$aux,
		
		]);
		}
		else{
		
		$request->validate([
		
			'clave' => 'required|in:'.$user->clave,
		
		]);
		}
		
		if($user->admin==1)	{
			return redirect()->route('admins.index');
		}
		else{
			return $next($request);
		}
		
		
	
		
		
       
    }
}
