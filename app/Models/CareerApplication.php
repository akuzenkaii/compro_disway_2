<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CareerApplication extends Model
{
    protected $table = 'career_applications';

    protected $fillable = [
        'name', 'email', 'phone', 'office', 'cv', 'cover_letter', 'status'
    ];
}
