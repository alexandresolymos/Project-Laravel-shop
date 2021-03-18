<?php

namespace App\Http\Controllers;

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Stripe;
use App\Models\Payment;
use App\Http\Requests\PaymetRequest;



class CheckoutController extends Controller
{
    public function checkout(){
        return view('checkout');
    }

    public function success(){
        Cart::destroy();
        return view('success');
    }

    public function payment()
    {
        $payment = Payment::all();
        return view('admin.payment.index', compact('payment'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.payment.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function two(PaymetRequest $request)
    {

        Payment::create([
            'STRIPE_KEY' => $request->input('STRIPE_KEY'),
            'STRIPE_SECRET' => $request->input('STRIPE_SECRET'),
        ]);

        return redirect()->route('admin.payment.index');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Payment $payment)
    {
        return view('admin.payment.edit', compact('payment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Payment $payment)
    {
        $payment->STRIPE_KEY = $request->input('STRIPE_KEY');
        $payment->STRIPE_SECRET = $request->input('STRIPE_SECRET');
        $payment->save();

        return redirect()->route('admin.payment.index')->with(
            'success', "Stripe à été modifier"
        );
    }

    public function store(Request $request) {

        $payment = DB::table('payments')->pluck('STRIPE_SECRET')->first();
        Stripe\Stripe::setApiKey($payment);

        try {

            Stripe\Charge::create ([
                'amount' => Cart::total() * 100,
                'currency' => 'eur',
                'description' => 'Paiment',
                'source' => $request->stripeToken,
                'receipt_email' => $request->email,
            ]);

            return redirect()->route('success.checkout');

        }
        catch (Stripe\Exception\CardErrorException $e){
            throw $e;
        }
    }


}
