<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Competency extends Model
{
    use HasFactory;

    public function children()
    {
        return $this->hasMany(Competency::class, 'parent_id');
    }

    public function framework(){
        return $this->belongsTo(Framework::class);
    }
}
