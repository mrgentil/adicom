<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Newsletter\Facades\Newsletter;


class NewsletterController extends Controller
{
    public function subscribe(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:subscribers,email',
        ]);

        Newsletter::subscribe($request->input('email'));

        return redirect()->back()->with('success', 'Vous êtes maintenant abonné à notre newsletter !');
    }
}
