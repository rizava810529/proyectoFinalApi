<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;

    protected $table = 'personas';

    protected $fillable = [
        'primer_nombre',
        'segundo_nombre',
        'primer_apellido',
        'segundo_apellido',
    ];

    protected static function boot()
    {
        parent::boot();

        // Se ejecuta antes de eliminar una persona
        static::deleting(function($persona) {
            // Elimina los usuarios relacionados
            $persona->usuarios->each(function($usuario) {
                $usuario->delete();
            });
        });
    }

    public function usuarios()
    {
        return $this->hasMany(Usuario::class, 'idpersona');
    }
}

