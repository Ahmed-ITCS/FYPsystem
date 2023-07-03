<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class deadlines extends Model
{
    use HasFactory;
    protected $fillable = [
        'submissiondate',
        'submissiontime', 
        'startingdate'
    ];

    public function hasStarted()
    {
        return now()->startOfDay() >= $this->startingdate;
    }
    
    public function phase1()
    {
        return $this->belongsTo(Phase1::class);
    }
    
    

    public function phase2()
    {
        return $this->belongsTo(phase2::class);
    }

    public function phase3()
    {
        return $this->belongsTo(phase3::class);
    }
}
