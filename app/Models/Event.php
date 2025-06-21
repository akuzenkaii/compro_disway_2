<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// App\Models\Event.php
class Event extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'desc', 'img'];
}
