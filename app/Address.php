<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Address extends Model
{

	 protected $fillable = ['addressline', 'town', 'county','phone','alt_phone'];
   
    
   /* 
    public function user(){

    	return $this->belongsTo('App\User');
    }
    */
    
}
