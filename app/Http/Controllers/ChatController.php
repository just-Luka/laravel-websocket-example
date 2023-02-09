<?php

namespace App\Http\Controllers;

use App\Events\MessageSent;
use App\Http\Requests\MessageFormRequest;
use App\Models\Message;
use Termwind\Components\Dd;

class ChatController extends Controller
{

    public function index()
    {
        Auth()->loginUsingId(rand(1,5));

        return view('welcome');
    }

    public function messages()
    {
        return Message::query()->with('user')->get();
    }

    public function send(MessageFormRequest $request)
    {
        $message = $request->user()->messages()->create($request->validated());

        broadcast(new MessageSent($request->user(), $message));
        return $message;
    }
}
