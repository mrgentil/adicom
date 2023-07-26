<?php

namespace App\Repositories;

use App\Models\Contact;

class ContactRepository extends \App\Models\Contact
{
    public function store(string $name, string $email, string $phone, string $subject, string $contenu)
    {
        Contact::query()->create([
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'subject' => $subject,
            'contenu' => $contenu
        ]);
    }
}
