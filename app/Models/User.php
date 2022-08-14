<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Sintoma;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
	 
	 public $timestamps = false;
	 
    protected $fillable = [
        'nombre',
        'apellido',
        'clave',
        'cedula',
        'correo',
        'dire_municipio',
        'dire_localidad',
        'tele_fijo',
        'tele_movil',
		'centro_medico',
		'admin'
    ];

    public function sintoma()
    {
      return $this->belongsToMany('App\Models\Sintoma','sintoma_user','user_id','sintoma_id');
    }

	public function enfermedad()
    {
      return $this->belongsToMany('App\Models\Enfermedades','enfermedades_user','user_id','enfermedades_id');
    }
	
    public function notification()
    {
      return $this->belongsToMany('App\Models\Notification','users_notifications','users_id','notifications_id');
    }

}
