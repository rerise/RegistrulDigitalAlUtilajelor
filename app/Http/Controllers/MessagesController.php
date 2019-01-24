<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class MessagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $newmessages = Message::where('read_status', 0)->get();
        $oldmessages = Message::where('read_status', 1)->get();
        
        $messages = Message::all();
        return view('messages.list', compact('messages', 'newmessages',
            'oldmessages'));
    }

    /**
     * Change read status for a message (Read/Unread)
     *
    */
    public function changeReadStatus($messageId)
    {
        $message = Message::find($messageId);
        $message->read_status = !$message->read_status;
        $message->save();
        // dd($message->read_status);
        return back();
    }
}
