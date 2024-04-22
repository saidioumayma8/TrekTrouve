<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class trail extends Model
{
    protected $table = "trail";
    protected $fillable = [
        'name',
        'difficultylevel',
        'endpoint',
        'startpoint',
        'length',
        'excursion_id',

    ];

    // Define the relationship with Excursion
    public function excursion()
    {
        return $this->belongsTo(Excursion::class);
    }
}

