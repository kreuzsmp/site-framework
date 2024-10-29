<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;

class PaymentCallbackController extends Controller
{
    public function index(Request $request)
    {
        Log::info('попытка вызова callback с Easydonate...');
        $hashString = implode('@', [
            $request->input('payment_id'),
            $request->input('cost'),
            $request->input('customer')
        ]);

        $signature = hash_hmac('sha256', $hashString, env('EASYDONATE_SECRET'));
        $product = $request->input('products')[0];
        if ($product['id'] == env('EASYDONATE_PRODUCT_PASS_ID')) {
            if (strcasecmp($signature, $request->input('signature')) == 0) {
                User::updateOrCreate([
                    'nickname' => $request->input('customer')
                ], [
                    'whitelisted' => true
                ]);
                Log::info("Игрок {$request->input('customer')} купил проходку!");
                Http::withHeaders(
                    ['Authorization' => env('DISCORD_BOT_TOKEN')]
                )->put('https://discord.com/api/guilds/' . env('DISCORD_GUILD_ID') . '/members/' . Auth::user()->discord_id . '/roles/' . env('DISCORD_ROLE_ID'));
            }
            else {
                Log::info('BAD SIGNATURE.');
                return "ERROR";
            }
        }
        else {
            if (strcasecmp($signature, $request->input('signature')) == 0) {
                Log::info("Игрок {$request->input('customer')} купил спосорку с (id товара " . $product = $request->input('products')[0]['id'] . ")!");
            }
        }


    }
}
