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
        $hashString = implode('@', [
            $request->input('payment_id'),
            $request->input('cost'),
            $request->input('customer')
        ]);
        $signature = hash_hmac('sha256', $hashString, env('EASYDONATE_SECRET'));

        if (strcasecmp($signature, $request->input('signature')) !== 0) {
            User::updateOrCreate([
                'nickname' => $request->input('customer')
            ], [
                'whitelisted' => true
            ]);
            Log::info("Игрок {$request->input('customer')} купил проходку!");
            return $signature . " | " . $request->input('signature');
        }
        else {
            Log::info('BAD SIGNATURE.');
            return "ERROR";
        }
    }
}
