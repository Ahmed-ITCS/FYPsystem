<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectApplication extends Model
{
    use HasFactory;
    public function ProjectApplication()
    {
        return $this->belongsTo(student::class);
    }
}
