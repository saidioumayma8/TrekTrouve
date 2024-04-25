<?php

namespace App\Models;

use App\Models\trail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class excursion extends Model
    {
        use SoftDeletes;
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
        ];

    // Define the relationship with Trail
    public function trail()
    {
        return $this->hasOne(Trail::class,'excursion_id');
    }
    public function scopeAccepted($query)
    {
        return $query->where('is_accepted', true);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    }
