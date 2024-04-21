<?php

namespace App\Models;

use App\Models\trail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class excursion extends Model
    {
        protected $table = "excursion";

        protected $fillable = [
            'date',
            'description',
            'duration',
            'image',
            'location',
            'title',
            'prix',
            'user_id',
            'trail_id',
        ];

    // Define the relationship with Trail
    public function trail()
    {
        return $this->hasOne(Trail::class);
    }
    }
