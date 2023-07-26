@component('mail::message')
    # Nouveau message de contact

    **Nom :** {{ $data['name'] }}

    **Email :** {{ $data['email'] }}

    **Sujet :** {{ $data['subject'] }}

    **Téléphone :** {{ $data['phone'] }}

    **Message :**
    {{ $data['contenu'] }}

    Merci,

@endcomponent
