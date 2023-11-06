<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $table = 'usuarios';
    protected $primaryKey = 'id'; // Esto define 'id' como la clave primaria
    protected $dates = ['usuariocreacion','fechamodificacion'];
    protected $casts = [
        'usuariocreacion' => 'date:Y-m-d',
    ];
    
    protected $fillable = [
        'idpersona',
        'usuario',
        'clave',
        'habilitado',
        'fecha',
        'idrol',
        'fechacreacion',
        'fechamodificacion',
        'usuariocreacion',
        'usuariomodificacion',
    ];

   

    protected static function boot()
    {
        parent::boot();

        // Se ejecuta antes de eliminar un usuario
        static::deleting(function ($usuario) {
            // Elimina el usuario relacionado con la persona
            if ($usuario->relationLoaded('persona')) {
                $usuario->persona->dissociate();
                $usuario->persona->save();
            }
        });
    }

    public function persona()
    {
        return $this->belongsTo(Persona::class, 'idpersona');
    }
}
