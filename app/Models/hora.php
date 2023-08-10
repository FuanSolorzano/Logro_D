<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\asistencia;

class hora extends Model
{
    use HasFactory;
    protected $fillable = ['Asistencia_id', 'horas_trabajadas', 'horas_extra'];
    
    public function asistencia()
    {
        return $this->belongsTo(asistencia::class, 'Asistencia_id');
    }
}
