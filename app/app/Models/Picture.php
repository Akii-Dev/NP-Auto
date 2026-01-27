<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{
    /** @use HasFactory<\Database\Factories\PictureFactory> */
    use HasFactory;

    protected $fillable = [
        'occasion_id', 
        'filename',
    ];

    // declares that pictures belong to occasion
    public function occasion()
    {
        return $this->belongsTo(Occasion::class);
    }
}
