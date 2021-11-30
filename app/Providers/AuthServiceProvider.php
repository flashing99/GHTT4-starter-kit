<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

use App\Models\User;



// customize email verify for fortify

use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Auth\Notifications\ResetPassword;
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


        //! define Gates
        /*
            //#--- SUPER ADMIN -----
            Gate::define('super_admin', function (User $user) {
                return $user->admin === 1;
            });
            //#--- ADMIN -----
            Gate::define('admin', function (User $user) {
                return $user->admin === 2;
            });
        */


        //!---------  OVVERIDE email verfication -----------

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

        //!----------- OVERRIDE ResetPassword  ------------------
        /* 

            Bonjour, Mohamed
            
            Vous nous avez informés avoir oublié votre mot de passe GHTT ADMIN.
            Cliquez sur le lien ci-dessous pour vérifier cette adresse email et créer un nouveau mot de passe :

                XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
             
            Vous nous avez informés avoir oublié votre mot de passe GHTT ADMIN.
            Merci.

            Cordialement,
            GHTT TEAM

            ----------------------------------------------------------------
            PROTEGEZ VOTRE MOT DE PASSE
            Ne communiquez JAMAIS votre mot de passe à quiconque, y compris au personnel de GHTT-ADMIN. 
            Protégez-vous contre les sites frauduleux en ouvrant une nouvelle fenêtre de navigateur Web (Internet Chrome, FireFox par exemple) 
            et en saisissant l'adresse de de la platforme chaque fois que vous vous connectez à votre compte.
            ----------------------------------------------------------------
            Veuillez ne pas répondre à cet email. Les messages reçus à cette adresse ne sont pas lus et ne reçoivent donc aucune réponse. 
            Pour obtenir de l'aide, connectez-vous à votre compte GHTT-ADMIN et cliquez sur le lien Aide en haut à droite de n'importe quelle page GHTT.



                


        ResetPassword::toMailUsing(function (User $user, string $verificationUrl,) {

            return (new MailMessage)
            ->subject(Lang::get('Reset Password Notification'))
            ->line(Lang::get('You are receiving this email because we received a password reset request for your account.'))
            ->action(Lang::get('Reset Password'), $url)
            ->line(Lang::get('This password reset link will expire in :count minutes.', ['count' => config('auth.passwords.'.config('auth.defaults.passwords').'.expire')]))
            ->line(Lang::get('If you did not request a password reset, no further action is required.'));
            
        }); */
    }
}
