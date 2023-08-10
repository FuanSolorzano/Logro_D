<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\empleado;
use App\Models\hora;

class asistencia extends Model
{
    use HasFactory;
    protected $fillable = ['Empleado_id', 'hora_entrada', 'hora_salida'];
    
    public function empleado()
    {
        return $this->belongsTo(empleado::class, 'Empleado_id');
    }
    
    public function horasTrabajadas()
    {
        return $this->hasOne(hora::class, 'Asistencia_id');
    }
}
