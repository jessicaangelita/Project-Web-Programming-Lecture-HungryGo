<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetails extends Model
{
    use HasFactory;
    protected $fillable = [
        'order_id',
        'menu_id',
        'quantity',
        'status_id'
    ];

    public function Menu()
    {
        return $this->belongsTo(Menu::class)->withTrashed();
    }

    public function status()
    {
        return $this->belongsTo(OrderStatus::class);
    }
}
