<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class phase1 extends Model
{
    use HasFactory;

    public function deadline()
    {
        return $this->hasOne(deadlines::class);
    }

}