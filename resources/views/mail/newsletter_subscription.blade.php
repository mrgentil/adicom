@component('mail::message')
    # Merci pour votre abonnement à notre newsletter !

    Bonjour {{ $subscriber->email }},

    Nous vous remercions de vous être abonné à notre newsletter. Vous recevrez bientôt nos dernières mises à jour et actualités.

    Merci encore et à bientôt !

    Cordialement,
    L'équipe de votre site
@endcomponent
