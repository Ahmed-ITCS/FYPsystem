<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class phase2 extends Model
{
    use HasFactory;
    public function phase2()
    {
        return $this->hasOne(grades2::class);
    }
}
