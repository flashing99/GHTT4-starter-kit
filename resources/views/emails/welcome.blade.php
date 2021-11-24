@component('mail::message')
    # Bienvenue{{ $user_name }},

    Vérification du code de validation de votre nouveau compte GHTT-ADMIN.

    # Valider votre compte GHTT-Admin
    =================================
    Vous venez de créer un nouveau compte GHTT-Admin, Pour pouvoir utiliser votre compte sur GHTT Admin, vous devez nous
    envoyer le code de validation si-dessous à l'adresse
    email exemple@groupe-htt.dz.

    ======================================

    votre code : {{ $user_code }}

    ======================================
    * Si vous n'avez pas essayé de créer un nouveau compte avec cette adresse e-mail récemment, vous pouvez ignorer ce
    message.


    {{-- @component('mail::button', ['url' => '#'])   

    @endcomponent --}}

    Cordialement,
    L'équipe Groupe HTT ADMIN.
    Groupe HTT - Groupe Hôtellerie, Tourisme et Thermalisme.
    {{ config('app.name') }}
@endcomponent
