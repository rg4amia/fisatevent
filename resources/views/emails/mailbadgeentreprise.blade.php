@component('mail::message')
    # BONJOUR {{ $nom_entreprise }},

    Monsieur {{ $nom_responsable}},
    Nous venons de vous envoyer votre badge de participation forum.

    @component('mail::button', ['url' => ''])
        Retour au site
    @endcomponent

    Merci pour l'internet porter à notre institution,<br>
    {{ config('app.name') }}
@endcomponent
