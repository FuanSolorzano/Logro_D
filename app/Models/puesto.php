<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class puesto extends Model
{
    use HasFactory;
    protected $fillable = ['puesto', 'salario'];
    
    public function empleados()
    {
        return $this->hasMany(Empleado::class, 'id_puesto');
    }
}
