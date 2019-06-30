<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Mockery\Exception;

class AuthController extends Controller
{
    public function ShowRegister()
    {
        return view('frontend.register');
    }

    public function processRegister(Request $request)
    {
        //Velidation

        $this->validate($request, [
            'full_name'   => 'required',
            'email'       => 'required|email|unique:users,email',
            'phone_number'=> 'required|min:6|max:15|unique:users,phone_number',
            'password'    => 'required|min:6|confirmed',
            ]);

        //Data Ready and Insert

        $data = [
            'full_name'  => $request->input('full_name'),
            'email'      => strtolower($request->input('email')),
            'phone_number'  => $request->input('phone_number'),
            'password'  => bcrypt($request->input('password')),
        ];

        try{
            User::create($data);
            $this->setSuccessMessage('User created.');
            return redirect()->route('login');
        }
        catch(Exception $e){
            $this->setErrorMessage( $e->getMessage() );
            return redirect()->back();
        }


    }

    public function ShowLogin()
    {
        return view('frontend.login');
    }

    public function processLogin(Request $request)
    {
        $credentials = $request->except(['_token']);

        if (auth()->attempt($credentials))
        {

          return redirect()->route('/');
        }

        $this->setErrorMessage('Invaild Credentials.');
        return redirect()->back();
    }

    public function ShowProfile()
    {
        $data['user'] = auth()->user();

        return  view('backend.profile', $data);
    }

    public function UpdateProfile(Request $request)
    {
        //Velidation

        $user = optional(auth()->user());

        $this->validate($request, [
            'full_name'   => 'required',
            'email'       => 'required|email|unique:users,email,'.$user->id,
            'phone_number'=> 'required|min:6|max:15|unique:users,phone_number,'.$user->id,
            'address'    => 'required',
        ]);

        $input = $request->except(['_token']);
        $user->update($input);
        $this->setSuccessMessage('Profile Updated.');

        return redirect()->back();
    }

    public function updatePassword(Request $request)
    {
        //Velidation

        $user = optional(auth()->user());

        $this->validate($request, [
            'old_password'   => 'required',
            'password'       => 'required|min:6|confirmed',

        ]);

        $credentials = [
            'email'  => $user->email,
            'password' => $request->input('old_password'),
        ];

        if(auth()->attempt($credentials))
        {
            $user->update([
                'password' => bcrypt($request->input('password')),

            ]);

            $this->setSuccessMessage('Password Changed.');

            return redirect()->back();
        }

        $this->setErrorMessage('old password dose not match.');

        return redirect()->back();
    }



    public function Logout()
    {
        $this->setSuccessMessage('User have logged out.');
       auth()->logout();
       return redirect()->route('login');
    }
}
