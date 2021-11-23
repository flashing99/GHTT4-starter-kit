@component('mail::message')
    # Bienvenue,

    Vérification du code de validation de votre nouveau compte GHTT-ADMIN.

    # Valider votre compte GHTT-Admin
    =================================
    Vous venez de créer un nouveau compte GHTT-Admin, pour y accéder veuiller nous envoyer le code de validation à l'adresse
    email exemple@groupe-htt.dz pour nous permettred d'activer votre compte.

    * Si vous n'avez pas essayé de créer un nouveau compte avec cette adresse e-mail récemment, vous pouvez ignorer ce
    message.




    @component('mail::button', ['url' => '#'])

        785962

    @endcomponent

    Cordialement,
    L'équipe Groupe HTT ADMIN.
    Groupe HTT - Groupe Hôtellerie, Tourisme et Thermalisme.
    {{ config('app.name') }}
@endcomponent
