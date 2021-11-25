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

    //public $user;

    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {

        //----------------------------------
        $randomNumber = random_int(100000, 999999);


        //----------------------------------
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
            'user_code' => ['string'],

        ])->validate();


        $user = User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
            'position_id' => $input['position_id'],
            'user_code' => $randomNumber,


        ]);



        // $this->generateNumber();

        //!---- Send mail --------       
        Mail::to($user->email)->send(new InscriptionMail($randomNumber, $user->name));


        return $user;


        //$sendToEmail = $input['email'];

        // $this->generateCode();
        //  $this->generateNumber();

        //dd($sendToEmail);
    }


    /**
     * Random 6 Number
     */
    /*  public function generateCode()
    {
        $randomNumber = random_int(100000, 999999);

        // var_dump($this->user->email, $randomNumber);


        //!---- Send mail --------       

        $this->user->code = $randomNumber;
        // $user->save();
        // Mail::to($this->user->email)->send(new InscriptionMail());

        return $this->user;
    }
 */



    private function generateNumber()
    {
        $number = mt_rand(100000, 999999); // better than rand()

        // call the same function if the barcode exists already

        //$number = '6793109';
        if ($this->numberExists($number)) {

            //dd('EXIST');
            return $this->generateNumber();
        }

        // otherwise, it's valid and can be used       

        //var_dump($this->user->email, $number);

        //!---- Send mail --------       

        //$this->user->user_code = $number;

        // $this->user->save();




        //Mail::to($this->user->email)->send(new InscriptionMail($number));
        //Mail::to($this->user->email)->send(new InscriptionMail($number));

        //  return $this->user;
        // return redirect()->to('login');

        // return redirect()->to('login')->with('success', "Un code de vérification va vous être envoyé. merci de vérifier votre mail.");
        // return redirect()->to('/')->with('errors', ' Veuillez vérifier vos informations!');
    }



    public function numberExists($number)
    {
        // query the database and return a boolean
        // for instance, it might look like this in Laravel
        return User::where('user_code', $number)->exists();
    }
}
