<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function shippingAddress(){
        return $this->belongsTo(Address::class,'shipping_address_id');
    }
    public function billingAddress(){
        return $this->belongsTo(Address::class,'billing_address_id');
    }
    public function shop(){
        return $this->belongsTo(Shop::class);
    }
    public function parentOrder(){
        return $this->belongsTo(Order::class,'parent_order_id');
    }
    public function childOrders(){
        return $this->hasMany(Order::class,'parent_order_id');
    }
    public function lineItems(){
        return $this->hasMany(LineItem::class,'parent_order_id');
    }
}
