<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class CheckDiscordServer extends Controller
{
    private function check(Request $request)
    {
        if (true) {
        #if ($request->header('X-IS-DISCORD-ID-REQUEST') == true) {
            $lastId = 0;
            $ids = [];
            while (true) {
                $res = Http::withHeaders([
                    'Authorization' => env('DISCORD_BOT_TOKEN', ""),
                    'User-Agent' => "KreuzSMP/1.0",
                ])->get('https://discord.com/api/guilds/1214483551421075496/members?limit=1000&after=' . $lastId);
                # 1214483551421075496 - сервер Kreuz

                $users = json_decode($res->body());
                if (count($users) == 0) {
                    break;
                }

                foreach ($users as $value) {
                    $ids[] = $value->user->id;
                }

                $lastId = $ids[count($ids) - 1];
            }

            return in_array(Auth::user()->discord_id, $ids);
        }
        else {
            abort(403);
        }
    }

    public function ret(Request $request)
    {
        return $this->check($request) ? "true" : "false";
    }

    public function form(Request $request)
    {
        if ($this->check($request)) {
            return view('layouts.form');
        }
        else {
            abort(403);
        }
    }
}
