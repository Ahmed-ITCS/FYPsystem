<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class grades2 extends Model
{
    use HasFactory;
    protected $fillable = ['marks','pid'];
}
