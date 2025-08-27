<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'description',
        'detailed_description',
        'icon',
        'image',
        'starting_price',
        'duration_estimate',
        'is_featured',
        'is_active',
        'sort_order',
    ];

    protected $casts = [
        'starting_price' => 'decimal:2',
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
