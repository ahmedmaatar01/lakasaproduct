<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;
    protected $fillable = [
        'order_id',
        'produit_id',
        'price',
        'quantity',
        'length',
        'width',
        'frame',
        'frame_color',
        'led_color',
        'mirror_color',
        'switch_type',
    ];


    public function order()
    {
        return $this->belongsTo(Order::class);
    }
    public function product()
    {
        return $this->belongsTo(product::class);
    }
}
