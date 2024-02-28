<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Slider extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'subtitle',
        'description',
        'button_url',
        'thumb',
        'cover',
        'status',
    ];

    public function status(): Attribute
    {
        return Attribute::make(
            set: fn($value) => $value == null ? 0 : 1,
        );
    }

    public function thumb(): Attribute
    {
        return Attribute::make(
            get: fn($value) => asset($value),
        );
    }

    public function cover(): Attribute
    {
        return Attribute::make(
            get: fn($value) => asset($value),
        );
    }
}
