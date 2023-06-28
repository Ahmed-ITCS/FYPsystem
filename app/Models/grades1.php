<?php

namespace App\Models;

use App\Http\Controllers\student;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class grades1 extends Model
{
    use HasFactory;
    protected $fillable = ['marks','pid'];
    public function grades1()
    {
        return $this->belongsTo(phase1::class);
    }
}
