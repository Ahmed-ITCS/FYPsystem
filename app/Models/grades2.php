<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class grades2 extends Model
{
    use HasFactory;
    protected $fillable = ['marks','pid'];
    public function grades2()
    {
        return $this->belongsTo(phase2::class);
    }
}
