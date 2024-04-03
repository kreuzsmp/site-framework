<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class PaymentCallbackController extends Controller
{
    public function index(Request $request)
    {
        $sig = hash_hmac('sha256', $request->input('payment_id') . '@' . $request->input('cost') . '@' . $request->input('customer'), env('EASYDONATE_SECRET'));

        if (strcasecmp($sig, $request->input('signature'))) {
            User::updateOrCreate([
                'nickname' => $request->input('customer')
            ], [
                'whitelisted' => true
            ]);
            Log::info("Игрок {$request->input('customer')} купил проходку!");
            return "COMPLETE!";
        }
        else {
            Log::info('BAD SIGNATURE.');
            return "ERROR";
        }
    }
}
