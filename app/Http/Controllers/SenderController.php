<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;

use App\Mail\ConsultMail;

class SenderController extends Controller
{
    public function send_consultation(Request $request) {
        $data = $request->validate([
            "name" => [],
            "phone" => ['required','string'],
            "review" => []
        ]);

        Mail::to(["asmi046@gmail.com","cubensis2009@yandex.ru"])->send(new ConsultMail($data));

        return ["send" => "Сообщение отправлено"];
    }


    public function show_thencs() {
        return view('thencs-form');
    }
}
