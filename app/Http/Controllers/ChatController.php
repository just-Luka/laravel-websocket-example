<?php

namespace App\Http\Controllers;

use App\Events\MessageSent;
use App\Http\Requests\MessageFormRequest;
use App\Models\Message;
use Termwind\Components\Dd;

class ChatController extends Controller
{
    /**
     * Logs user by their id in range of 1 to 5
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        Auth()->loginUsingId(rand(1,5));

        return view('welcome');
    }

    /**
     * Retrieves all messages from database [That method is not user in anywhere]
     * @return \Illuminate\Database\Eloquent\Collection|array<\Illuminate\Database\Eloquent\Builder>
     */
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
