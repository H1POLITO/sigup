<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\MessageBag;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */

    protected $for = [
        1 => 'admin.sistema.dashboard',
        2 => 'aluno.sistema.dashboard'
    ];

    // protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Get username property.
     *
     * @return string
     */
    public function username()
    {
        return 'nome_usuario';
    }

    protected function redirectTo()
    {
        return $this->redirectTo = route(
            $this->for[auth()->user()->permission_id]
        );
    }

    public function login(Request $request)
    {
        $user = User::where([
            'email' => $request->email,
            'password' => $request->password
        ])->first();

        if ($user) {
            Auth::login($user);
            return redirect()->route(
                $this->for[auth()->user()->permission_id]
            );
        } else {
            $errors = new MessageBag(['error' => ['Email and/or password invalid.']]);
            return redirect()->back()->withErrors($errors);
        }
    }
}
