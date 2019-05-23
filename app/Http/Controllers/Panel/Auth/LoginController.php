<?php

namespace App\Http\Controllers\Panel\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Request;


class LoginController extends Controller
{
    use AuthenticatesUsers;

     public $redirectTo = '/panel';

    public function __construct()
    {
        $this->middleware('panel.guest', ['except' => 'logout']);
    }

    public function showLoginForm()
    {
        return view('panel.auth.login');
    }     
    
    protected function guard()
    {
        return Auth::guard('panel');
    }
    
    protected function authenticated(Request $request, $user)
    {
        
    }

    protected function loggedOut(Request $request)
    {
        return redirect()->route('panel.login');
    }
   
}
