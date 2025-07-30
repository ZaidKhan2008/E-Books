<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Book extends Model
{
      use HasFactory;

    // Allow mass assignment
    protected $fillable = ['title', 'author', 'price', 'stock'];

    // Many-to-Many relationship with orders
    public function orders()
    {
        return $this->belongsToMany(Order::class)->withPivot('quantity', 'price_at_time');
    }
}
