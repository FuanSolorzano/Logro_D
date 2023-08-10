<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\rol;

class permiso extends Model
{
    use HasFactory;
    protected $fillable = ['Rol_id', 'permiso'];
    
    public function rol()
    {
        return $this->belongsTo(rol::class, 'Rol_id');
    }
}
