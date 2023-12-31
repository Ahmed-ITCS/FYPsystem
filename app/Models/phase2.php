<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class phase2 extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'description',
        'document'
    ];

    public function deadlines()
    {
        return $this->hasOne(deadlines::class)->where('id', 2);
    }
}