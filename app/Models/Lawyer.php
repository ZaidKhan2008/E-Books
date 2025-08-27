<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lawyer extends Model
{
    protected $fillable = [
        'name',
        'title',
        'email',
        'phone',
        'bio',
        'specialization',
        'years_experience',
        'education',
        'bar_admission',
        'image',
        'languages',
        'hourly_rate',
        'is_featured',
        'is_active',
    ];

    protected $casts = [
        'languages' => 'array',
        'hourly_rate' => 'decimal:2',
        'is_featured' => 'boolean',
        'is_active' => 'boolean',
    ];

    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true);
    }

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }
}
