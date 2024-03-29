<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use xPaw\MinecraftPing;
use xPaw\MinecraftPingException;
use App\Services\PaymentManager;


class MainController extends Controller
{
    static array $menu = ['Главная' => '/'];

    public function index()
    {
        try {
            $q = new MinecraftPing('kreuzsmp.ru');
            $res = $q->Query();
            if ($res) {
                return view('main', ['title' => 'Ваш аккаунт', 'menu' => self::$menu]);
            }
            else {
                throw new MinecraftPingException("не удалось подключиться к серверу");
            }
        }
        catch (MinecraftPingException $e) {
            return view('main', ['title' => 'Главная', 'menu' => self::$menu]);
        }
    }

    public function dashboard(Request $request)
    {
        return view("dashboard", ['title' => 'Панель управления', 'menu' => self::$menu]);
    }

    public function payment(Request $request)
    {
        $validated = $request->validate([
            'nickname' => ['required', 'max:16', 'alpha_dash:ascii', 'not_regex:/-/s']
        ]);

        User::updateOrCreate(['discord_id' => $request->user()->discord_id], ['nickname' => $request->input('nickname')]);

        return PaymentManager::createPayment($request->input('nickname'), $request->input('coupon') ?? ' ');
    }

    public function success()
    {
        return view('successbuy', ['title', 'menu' => self::$menu]);
    }
}
