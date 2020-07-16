<?php

namespace App\Http\Controllers\TS3;

use Adams\TeamSpeak3\Facades\TeamSpeak3;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Teamspeak3Controller extends Controller
{
    /**
     * Show connected clients
     */
    public function clients()
    {
        $data = TeamSpeak3::clientList();
        $users = [];
        foreach ($data as $d) {
            array_push($users, $d);
        }
        dd($users);
    }
}
