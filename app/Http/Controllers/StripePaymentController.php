<?php

namespace App\Http\Controllers;

use Stripe;
use Exception;
use App\Models\Product;
use Validator;
use Illuminate\Http\Request;


class StripePaymentController extends Controller
{
    public function paymentStripe($totall)
    {
        return view('stripe', ["totall" => $totall]);
    }

    public function postPaymentStripe(Request $request)
    {
        $total = $request->input("total");
        $validator = Validator::make($request->all(), [
            'card_no' => 'required',
            'ccExpiryMonth' => 'required',
            'ccExpiryYear' => 'required',
            'cvvNumber' => 'required',
            // 'amount' => 'required',
        ]);

        $input = $request->except('_token');

        if ($validator->passes()) {
            $stripe = Stripe::setApiKey(env('STRIPE_SECRET'));

            try {
                $token = $stripe->tokens()->create([
                    'card' => [
                        'number' => $request->get('card_no'),
                        'exp_month' => $request->get('ccExpiryMonth'),
                        'exp_year' => $request->get('ccExpiryYear'),
                        'cvc' => $request->get('cvvNumber'),
                    ],
                ]);

                if (!isset($token['id'])) {
                    return redirect()->route('stripe.add.money');
                }



                $charge = $stripe->charges()->create([
                    'card' => $token['id'],
                    'currency' => 'USD',
                    'amount' => $total,
                    'description' => 'wallet'
                ]);

                if ($charge['status'] == 'succeeded') {
                    // dd($charge);
                    return redirect()->route('addmoney.paymentstripe', [$total]);
                } else {
                    return redirect()->route('addmoney.paymentstripe', [$total])->with('error', 'Money not add in wallet!');
                }
            } catch (Exception $e) {
                return redirect()->route('addmoney.paymentstripe', ["total" => $total])->with('error', $e->getMessage());
            } catch (\Cartalyst\Stripe\Exception\CardErrorException $e) {
                return redirect()->route('addmoney.paymentstripe', [$total])->with('error', $e->getMessage());
            } catch (\Cartalyst\Stripe\Exception\MissingParameterException $e) {
                return redirect()->route('addmoney.paymentstripe', [$total])->with('error', $e->getMessage());
            }
        }
    }
}
