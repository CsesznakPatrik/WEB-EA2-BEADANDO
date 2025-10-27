<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
class ContactController extends Controller
{
    public function store(Request $request)
    {
        //forms mező ellenőrzése
        $validatedData = $request->validate([
            'email' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ], [
            'name.required' => 'A név mező kitöltése kötelező',
            'email.required' => 'Az e-mail cím mező kitöltése kötelező',
            'email.email' => 'Érvényes e-mail címet adjon meg',
            'subject.required' => 'A tárgy mező kitöltése kötelező',
            'message.required' => 'Az üzenet mező kitöltése kötelező',
        ]);

        //adatbázisba mentés
        Message::create($validatedData);

        return redirect('fooldal');
    }
}
