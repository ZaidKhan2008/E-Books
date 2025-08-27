<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactMessage extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'subject',
        'message',
        'case_type',
        'budget_range',
        'is_urgent',
        'is_read',
        'read_at',
        'admin_notes',
    ];

    protected $casts = [
        'is_urgent' => 'boolean',
        'is_read' => 'boolean',
        'read_at' => 'datetime',
    ];

    public function scopeUnread($query)
    {
        return $query->where('is_read', false);
    }

    public function scopeUrgent($query)
    {
        return $query->where('is_urgent', true);
    }
}
