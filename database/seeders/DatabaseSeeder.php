<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Sintoma;
use App\Models\User;
use App\Models\Enfermedades;
use Illuminate\Database\Seeder;



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
		//Crear el administrador
		
		$user=new User();
		$user->nombre="admin";
		$user->apellido="admin";
		$user->clave="admin";
		$user->cedula="admin";
		$user->correo="admin";
		$user->dire_municipio="admin";
		$user->dire_localidad="admin";
		$user->tele_fijo="000";
		$user->tele_movil="000";
		$user->centro_medico="admin";
		$user->admin=1;
		
		$user->save();
		
		//Crear las enfermedades/virus actuales
		
		$virus=new Enfermedades();
		$virus->nombre="COVID 19";
		$virus->save();
		
		$virus=new Enfermedades();
		$virus->nombre="Viruela del mono";
		$virus->save();
		
		$virus=new Enfermedades();
		$virus->nombre="Variante del COVID";
		$virus->save();
		
		//Crear los principales síntomas
		
		$sintoma=new Sintoma();
		$sintoma->nombre="fiebre";
	
		
		$sintoma->save();
		
		$sintoma=new Sintoma();
		$sintoma->nombre="erupciones en la piel";
		
		$sintoma->save();
		
		$sintoma=new Sintoma();
		$sintoma->nombre="tos";
	
		$sintoma->save();
		
		$sintoma=new Sintoma();
		$sintoma->nombre="dolores musculares";
		
		$sintoma->save();
		
		$sintoma=new Sintoma();
		$sintoma->nombre="dolor de cabeza";
		
		$sintoma->save();
		
		$sintoma=new Sintoma();
		$sintoma->nombre="vómito";
		
		$sintoma->save();
		
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
