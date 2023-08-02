<?php

namespace App\Http\Controllers\Frontkam;

use App\Http\Controllers\Controller;
use App\Http\Requests\MessageRequest;
use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{

    public function store(MessageRequest $request)
    {
        $validated = $request->validated();


        Message::create($validated);

        return redirect()->back()->with('success', 'Your message has been successfully sent, you will be contacted shortly. Thank you');
    }
}
