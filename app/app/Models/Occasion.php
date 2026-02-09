<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Occasion extends Model
{
    /** @use HasFactory<\Database\Factories\OccasionFactory> */
    use HasFactory;

    protected $fillable = [
        'title',
        'price',
        'plate',
        'description',
        'mileage',
        'sold',
        'visible',
        'brand',
    ];

    // declares the zero-to-many relationship with Picture
    public function pictures()
    {
        return $this->hasMany(Picture::class);
    }
}
