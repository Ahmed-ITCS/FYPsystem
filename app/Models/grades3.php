<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class grades3 extends Model
{
    use HasFactory;
    protected $fillable = ['marks','pid'];
    public function grades3()
    {
        return $this->belongsTo(phase3::class);
    }
}
