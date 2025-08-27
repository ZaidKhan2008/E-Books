<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CaseStudy extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'client_name',
        'case_type',
        'description',
        'challenge',
        'solution',
        'outcome',
        'image',
        'case_value',
        'case_date',
        'is_featured',
        'is_published',
    ];

    protected $casts = [
        'case_value' => 'decimal:2',
        'case_date' => 'date',
        'is_featured' => 'boolean',
        'is_published' => 'boolean',
    ];

    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true);
    }

    public function scopePublished($query)
    {
        return $query->where('is_published', true);
    }
}
