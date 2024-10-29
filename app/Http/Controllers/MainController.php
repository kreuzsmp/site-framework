<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use xPaw\MinecraftPing;
use xPaw\MinecraftPingException;
use App\Services\PaymentManager;
use Illuminate\Support\Facades\Log;

class MainController extends Controller
{
    static array $menu = ['Главная' => '/'];

    public function index(Request $request)
    {
        Log::info("Посещена главная страница с клиента: " . $request->userAgent());
        return view('main', ['title' => 'Главная']);
    }

    public function dashboard(Request $request)
    {
        return view("dashboard", ['title' => 'Ваш аккаунт']);
    }

    public function sub()
    {
        return view('kreuzplus', ['title' => "Подписка Kreuz+"]);
    }

    public function payment(Request $request)
    {
        $validated = $request->validate([
            'nickname' => ['required', 'max:16', 'alpha_dash:ascii', 'not_regex:/-/s'],
            'email' => ['required', 'email:rfc,dns'],
            'months' => ['numeric']
        ]);
        if ($request->has('months')) {
            return PaymentManager::createPayment($request->input('nickname'), $request->input('coupon') ?? ' ', $request->input('email'), 'sponsor' . $request->input('months'));
        }
        else {
            User::updateOrCreate(['discord_id' => $request->user()->discord_id], ['nickname' => $request->input('nickname')]);

            return PaymentManager::createPayment($request->input('nickname'), $request->input('coupon') ?? ' ', $request->input('email'));

        }

    }


    public function success()
    {
        return view('successbuy', ['title' => "Спасибо за покупку!"]);
    }
}
