<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;

class DiscordAuthorizationController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create() : RedirectResponse
    {
        return Socialite::driver('discord')->redirect();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $discordUser = Socialite::driver('discord')->user();

        $user = User::updateOrCreate([
            'discord_id' => $discordUser->id],
            [
            'name' => $discordUser->nickname,
            'email' => $discordUser->email,
            'discord_token' => $discordUser->token,
            'discord_refresh_token' => $discordUser->refreshToken,
            'avatar' => $discordUser->avatar,
        ]);

        Auth::login($user);
        return redirect()->route('dashboard');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('main');
    }
}
