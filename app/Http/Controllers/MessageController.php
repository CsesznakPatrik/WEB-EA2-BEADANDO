<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class MessageController extends Controller
{
    //

    public function index()
    {
        $messages = Message::orderBy('created_at', 'desc')->get();
        return view('messages.list', compact('messages'));
    }
}
