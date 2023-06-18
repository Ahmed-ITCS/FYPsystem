<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectPhase extends Model
{
    protected $fillable = [
        'name',
        'description',
        'start_date',
        'end_date',
    ];

    // Define relationships or any other relevant methods

    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    public function phaseData()
    {
        return $this->hasOne(ProjectPhaseData::class);
    }

    public function hasStarted()
    {
        return now()->startOfDay() >= $this->start_date;
    }

}
