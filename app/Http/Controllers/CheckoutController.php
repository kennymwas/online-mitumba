<?php

namespace App\Http\Controllers;

use App\Order;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PDF;


class CheckoutController extends Controller
{

	/*
    public function checkout_step1(){

    	if (Auth::check()) {
    		
    		return redirect()->route('checkout.shipping');
    	}
    	return redirect('login');
    }
    */

    public function shipping(){

    	return view('front.shipping-info');
    }

    public function payment(){

    	return view('front.payment');
    }

     public function storePayment(Request $request){


    // Set your secret key: remember to change this to your live secret key in production
    // See your keys here: https://dashboard.stripe.com/account/apikeys
        \Stripe\Stripe::setApiKey("sk_test_DfhgyskPNNZCDSc9uQSn9kwD");

// Get the credit card details submitted by the form
        $token = $request->stripeToken;  //getting the token from the stripe from

// Create a charge: this will charge the user's card
        try {
            $charge = \Stripe\Charge::create(array(
                "amount" => Cart::total()*100, // Amount in cents
                "currency" => "usd",
                "source" => $token,
                "description" => "Example charge"
            ));
        } catch (\Stripe\Error\Card $e) {
            // The card has been declined
        }
    

    //create order
        $user=Auth::user();
        $order=$user->orders()->create([
            'total'=>Cart::total(),
            'delivered'=>0
        ]);

        $cartItems=Cart::content();
        foreach ($cartItems as $cartItem){
            $order->orderItems()->attach($cartItem->id,[
                'qty'=>$cartItem->qty,
                'total'=>$cartItem->qty*$cartItem->price
            ]);
        }

        //creating pdf
        $data=[
           'number' => $order->id,
           'user' =>Auth::user(), 
           'products' =>Cart::content()
        ];
        $pdf = PDF::loadView('pdf.invoice', $data);
        return $pdf->download('invoice.pdf');
        
   }

   //function to export excel
   public function actionDownloadReport(){
       $fields = array ('number','user','product');
       $criteria = new invoice();
       $criteria = select = $fields;
       $criteria ->condition = "number=''";
       $criteria ->order ="product";
       $users=users::model()->findAll($criteria);
       
       XlsExporter::downloadXls('report',$users,'List of users:',true,$fields,'users');
   }

}
