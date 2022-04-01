<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Framework extends Model
{
    use HasFactory;

    public function competencies()
    {
        return $this->hasMany(Competency::class);
    }
}
