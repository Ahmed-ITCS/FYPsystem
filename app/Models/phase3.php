<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class phase3 extends Model
{
    use HasFactory;
    public function phase3()
    {
        return $this->hasOne(grades3::class);
    }
}
