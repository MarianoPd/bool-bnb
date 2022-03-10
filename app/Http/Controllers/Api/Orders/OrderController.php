<?php

namespace App\Http\Controllers\Api\Orders;

use App\Http\Controllers\Controller;
use App\Http\Requests\Orders\OrderRequest;
use App\Sponsorship;
use Illuminate\Http\Request;
use Braintree\Gateway;



class OrderController extends Controller
{
    public function generate(Request $request,Gateway $gateway){
        $token = $gateway->clientToken()->generate();
        $data =[
            'success' => true,
            'token' => $token,
        ];
        return response()->json($data, 200);
    }


    public function makePayment(OrderRequest $request,Gateway $gateway){
        
        $sponsorship = Sponsorship::where('name',$request->spoName)->first();
        //dd($request->all());
        

        if (isset($request->validator) && $request->validator->fails()) {
            return response()->json([
                'error_code'=> 'VALIDATION_ERROR', 
                'message'   => 'The given data was invalid.', 
                'errors'    => $request->validator->errors()
            ]);
        }
        //dd($sponsorship->price,$request->token);
        $result = $gateway->transaction()->sale([
            'amount' => strval($sponsorship->price),
            'paymentMethodNonce' => 'fake-valid-nonce',  //$request->token,
            'options' => [
                'submitForSettlement' => True
            ]
        ]);

        if($result->success){
            $data =[
                'success' => true,
                'message' => "Transazione eseguita con successo",
                
            ];
            return response()->json($data, 200);
        }else{
            $data =[
                'success' => false,
                'message' => "Transazione Fallita",
                
            ];
            return response()->json($data, 401);
        }
        
    }
}
