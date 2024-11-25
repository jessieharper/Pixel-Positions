<?php

namespace App\Models;

use Database\Factories\JobFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    /** @use HasFactory<JobFactory> */
    use HasFactory;

    public function employer()
    {
        return $this->belongsTo(Employer::class);
    }
}
