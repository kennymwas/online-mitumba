<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;
use App\Product;
use App\User;

class Order extends Model
{
    protected $fillable=['total','delivered'];

    public function orderItems(){
      
      return $this->belongsToMany(Product::class)->withPivot('qty','total');
    }

    public function user(){
    	return $this->belongsTo(User::class);
    }

   

}
