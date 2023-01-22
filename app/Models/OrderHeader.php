<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderHeader extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id'
    ];

    public function OrderDetails()
    {
        return $this->hasMany(OrderDetails::class, 'order_id', 'id');
    }
}
