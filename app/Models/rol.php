<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rol extends Model
{
    use HasFactory;
    protected $fillable = ['nombre_rol'];
    public function permisos()
    {
        return $this->hasMany(Permiso::class, 'id_rol');
    }
}
