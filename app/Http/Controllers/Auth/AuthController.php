<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect failed authentication.
     *
     * @var string
     */
    protected $loginPath = '/account';

    /**
     * Where to redirect successful authentication.
     *
     * @var string
     */
    protected $redirectPath = '/';

    /**
     * Create a new authentication controller instance.
     *
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
    }

    /**
     * Show the application authentication and registration form.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('auth.index');
    }

    /**
     * Handle a registration request for the application.
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function postRegister(Request $request)
    {
        $validator = $this->validator($request->all());

        if ($validator->fails()) {
            $this->throwValidationException(
                $request, $validator
            );
        }

        $user = $this->create($request->all());

        Mail::send('auth.emails.confirm', compact('user'), function($message) use ($user)
        {
            $message->to($user->email)
                ->from(env('MAIL_NOREPLY'), env('MAIL_NAME'))
                ->subject('Confirm your EHDOnlineStore email address!');
        });

        return redirect()->route('account')->with('alert-success',
            'Registration successful! &ndash; Please check your email to activate your account.');
    }

    /**
     * Handle an email confirmation request for the application.
     *
     * @param $token
     * @return \Illuminate\Http\RedirectResponse
     */
    public function getRegisterConfirm($token)
    {
        $user = User::whereToken($token)->firstOrFail();

        $user->verified = true;
        $user->token = null;
        $user->save();

        return redirect()->route('account')->with('alert-success',
            'Your e-mail address was successfully confirmed. You can now login to your account.');
    }

    /**
     * Get the needed authorization credentials from the request.
     *
     * @param Request $request
     * @return array
     */
    protected function getCredentials(Request $request)
    {
        return [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
            'verified' => true
        ];
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        session()->flash('form', 'registration');

        return Validator::make($data, [
            'firstname' => 'required|between:2,45',
            'lastname' => 'required|between:2,45',
            'registration_email' => 'required|email|max:255|unique:users,email',
            'registration_password' => 'required|confirmed|min:8',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'firstname' => $data['firstname'],
            'lastname' => $data['lastname'],
            'email' => $data['registration_email'],
            'password' => $data['registration_password'],
        ]);
    }
}
