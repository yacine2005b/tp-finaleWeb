<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{

    public function index()
    {

        $senders = Message::where('sent_to_id', Auth::id())
        ->distinct('sender_id')
        ->pluck('sender_id');

// Load the sender users
$users = User::whereIn('id', $senders)->get();

        // You might want to load the sender and receiver relationships here if you want to display their names, etc.

        // Return a view with the messages
        return view('message.index', ["users" => $users]);
    }
    public function create(Request $request)
    {
        $users = User::all();
        $recipient_id = $request->input('recipient_id');
        $recipient_name = $request->input('recipient_name');

        // Find the recipient user
        $recipient = $recipient_id ? User::findOrFail($recipient_id) : null;


        return view('message.create',compact('users', 'recipient', 'recipient_name'));
    }
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'message' => 'required|string',
            'sent_to_id' => 'required|exists:users,id',
        ]);



        // Create a new message
        $message = new Message();
        $message->message = $request->input('message');
        $message->sender_id = Auth::id();
        $message->sent_to_id = $request->input('sent_to_id');

        if ($request->input('sender_id') == $request->input('sent_to_id')) {
            return redirect()->back()->with('error', 'You cannot send a message to yourself.');
        }
        $message->save();

       
        return redirect()->route('message.index')->with('success', 'Message sent successfully!');
    }
    public function messagesFromSender($sender_id)
    {
        $sentMessages = Message::where('sender_id', Auth::id())
                           ->where('sent_to_id', $sender_id)
                           ->get()
                           ->map(function ($message) {
                               $message->sent_by_me = true;
                               return $message;
                           });


    $receivedMessages = Message::where('sender_id', $sender_id)
                               ->where('sent_to_id', Auth::id())
                               ->get()
                               ->map(function ($message) {
                                   $message->sent_by_me = false;
                                   return $message;
                               });

    $mergedMessages = $sentMessages->merge($receivedMessages);
    $sortedMessages = $mergedMessages->sortBy('created_at');

    $sender = User::find($sender_id);
    $receiver = Auth::user();

    return view('message.showMessage', compact('sortedMessages', 'sender', 'receiver'));
    }
}