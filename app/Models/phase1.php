<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class phase1 extends Model
{
    use HasFactory;
    protected $fillable = [
        'description',
        'document'
    ];

    public function deadlines()
    {
        return $this->hasOne(deadlines::class)->where('id', 1);
    }

}