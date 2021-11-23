<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\CreatesNewUsers;


//------ For send mail ------------ 
use App\Mail\InscriptionMail;
use Illuminate\Support\Facades\Mail;




class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(User::class),
            ],
            'password' => $this->passwordRules(),
            'position_id' => ['required'],
        ])->validate();




        $user = User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
            'position_id' => $input['position_id'],
        ]);



        $sendToEmail = $input['email'];

        $this->generateCode($sendToEmail);

        return $user;
    }


    /**
     * Random 6 Number
     */
    public function generateCode($email)
    {
        $randomNumber = random_int(100000, 999999);

        dd($randomNumber);
        dd($email);

        //!---- Send mail --------

        /* $user = new User();

        $user->code = $randomNumber;
        $user->save();
        Mail::to($email)->send(new InscriptionMail()); */
    }
}
