<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Technology extends Model
{
    use HasFactory;

    // Many to Many on Technology
    public function projects()
    {
        return $this->belongsToMany(Technology::class);
    }
}
