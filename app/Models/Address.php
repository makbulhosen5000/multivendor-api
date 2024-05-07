<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function shippingAddress(){
        return $this->belongsTo(Order::class,'shipping_address_id');
    }
    public function billingAddress(){
        return $this->belongsTo(Address::class,'billing_address_id');
    }
}
