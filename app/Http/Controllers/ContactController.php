<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\ContactMAil;
use App\Models\Contact;
use App\Repositories\ContactRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact.index');
    }

    public function store(Request $request)
    {
        $contact = new Contact();
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->phone = $request->input('phone');
        $contact->subject = $request->input('subject');
        $contact->contenu = $request->input('contenu');
        $contact->save();

        // Envoyer un courriel
        $data = [
            'name' => $contact->name,
            'email' => $contact->email,
            'subject' => $contact->subject,
            'phone' => $contact->phone,
            'contenu' => $contact->contenu,
        ];

        Mail::to('contact@email.com')->send(new ContactMail($data));

        // Rediriger l'utilisateur ou afficher un message de confirmation
        return redirect()->back()->with('success', 'Votre message a été envoyé avec succès.');
    }
}
