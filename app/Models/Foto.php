<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Foto extends Model
{
    use HasFactory;
    public function Promocion()
    {
        return $this->hasMany(Promocion::class);
    }
    public function Rubro()
    {
        return $this->belongsTo(Rubro::class);
    }
}
