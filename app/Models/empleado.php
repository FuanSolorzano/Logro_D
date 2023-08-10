<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\puesto;
use App\Models\credencial;
use App\Models\asistencia;

class empleado extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'apellido', 'direccion', 'fecha_nacimiento', 'fecha_contratacion', 'Puesto_id', 'Credencial_id'];
    
    public function puesto()
    {
        return $this->belongsTo(puesto::class, 'Puesto_id');
    }
    
    public function credencial()
    {
        return $this->belongsTo(credencial::class, 'Credencial_id');
    }
    
    public function asistencias()
    {
        return $this->hasOne(asistencia::class, 'Empleado_id');
    }
}
