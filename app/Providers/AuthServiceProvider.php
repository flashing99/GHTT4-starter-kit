<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;



// customize email verify for fortify
use App\Models\User;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Support\Facades\Lang;
// 

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //


        //! Cutomize email verfication

        VerifyEmail::toMailUsing(function (User $user, string $verificationUrl) {




            $text_body1 = "Vous venez de créer un nouveau compte GHTT-Admin, Pour pouvoir utiliser votre compte sur GHTT Admin, vous devez nous
            envoyer le code de validation si-dessous à l'adresse
            email exemple@groupe-htt.dz.";

            // return (new MailMessage)
            //     ->subject(Lang::get('Verify Email Address'))
            //     ->line(Lang::get('Please click the button below to verify your email address.'))
            //     ->action(Lang::get('Verify Email Address'), $verificationUrl)
            //     ->line(Lang::get('If you did not create an account, no further action is required.'));
            return (new MailMessage)


                ->subject('# Valider votre compte GHTT-Admin')
                ->greeting('Bienvenue')->line($user->name)
                ->salutation("Cordialement, L'équipe Groupe HTT ADMIN.")

                ->line("Groupe Hôtellerie, Tourisme et Thermalisme")
                ->line('++++++++++++++++++++++++++++++++++++++++++++++')
                ->line("Vérification du code de validation de votre nouveau compte GHTT-ADMIN")
                ->line('====================')
                ->line($text_body1)
                ->line('====================')
                ->line('Votre code :')->line($user->user_code)
                ->line('====================')
                ->action($user->user_code, '#')
                ->line(" * Si vous n'avez pas essayé de créer un nouveau compte avec cette adresse e-mail récemment, vous pouvez ignorer ce message.");
        });
    }
}
