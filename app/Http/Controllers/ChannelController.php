<?php

namespace App\Http\Controllers;

use App\Channel;
use Illuminate\Http\Request;

class ChannelController extends Controller
{
    public function index() {
        $channels = Channel::all();

        return view('channel.index');
    }
}
