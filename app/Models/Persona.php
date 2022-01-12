<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    public $timestamps = false;
    protected $table='personas';
    protected $fillable=['nombre','apellidos','CI','telefono','empresa','direccion','tipo'];

    public function users()
    {
        return $this->hasOne(User::class, 'idPersona');
    }
}
