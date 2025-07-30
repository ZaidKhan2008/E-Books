<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
protected $fillable = ['customer_id', 'total_amount'];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function books()
    {
        return $this->belongsToMany(Book::class)->withPivot('quantity', 'price_at_time');
    }
}
