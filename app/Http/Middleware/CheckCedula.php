<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\User;

class CheckCedula
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
		
		$user_cedula=User::where('cedula',$request->cedula)->first();
		
		
		//$user =User::where('correo//',$request->correo)->first();
		
			if(!$user_cedula==null){
				$request->request->add(['id' => $user_cedula->id]);
				return $next($request);
		}
		
		
		
		else{
			
			$aux=null;
			
			$request->validate([
		
			'cedula' => 'required|in:'.$aux,
		
			]);
			
			
		}
		
	
		
		
       
    }
}
