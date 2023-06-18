<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectPhaseData extends Model
{
    use HasFactory;

    protected $fillable = [
        'project_phase_id',
        'data',
    ];

    public function phase()
    {
        return $this->belongsTo(ProjectPhase::class, 'project_phase_id');
    }

    // Define other relationships or any other relevant methods
}
