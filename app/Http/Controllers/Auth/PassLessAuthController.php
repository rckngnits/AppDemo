<?php

namespace App\Http\Controllers\Auth;

use Auth;
use App\UserLoginToken;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Auth\PassLessAuthentication;
use App\Http\Controllers\Controller;

class PassLessAuthController extends Controller
{
    protected $redirectOnRequested = '/login/passlessauth';
    public function show()
    {
    	return view('auth.passlessauth.login');
    }
    public function sendToken(Request $request, PassLessAuthentication $auth)
    {	
    	 $this->validateLogin($request);

    	 $auth ->requestLink();

         return redirect()->to($this->redirectOnRequested)->with('success' , 'We have sent you a Authentication link');
    }

    public function validateToken(Request $request, UserLoginToken $token)
    {
        $token -> delete();

        if ($token->isExpired()){
            return redirect('login/passlessauth')->with('error' , 'Authentication Link has expired');
        }

        if (!$token->belongsToEmail($request->email)){
            return redirect('login/passlessauth')->with('error' , 'Invalid Authentication Link');
        }

        Auth::login($token->user, $request->remember);

        return redirect()-> intended();
    }
    protected function validateLogin(Request $request)
    {
    	$this->validate($request, [
    		'email' => 'required|email|max:255|exists:users,email'
		]);
    }
}
