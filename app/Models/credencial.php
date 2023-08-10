<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class credencial extends Model
{
    use HasFactory;
    protected $fillable = ['correo', 'password'];
    
    public function empleado()
    {
        return $this->hasOne(Empleado::class);
    }
}
