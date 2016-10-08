<?php

namespace App\Auth\Traits;

use Mail;
use App\Mail\AuthLinkRequested;
use App\UserLoginToken;

trait PassLessauthenticable
{
	public function storeToken()
	{
		$this->token()->delete();

		$this->token()->create([
			'token' => str_random(255),
			]);

		return $this;
	}

	public function sendAuthLink(array $options)
	{
		Mail::to($this)->send(new AuthLinkRequested($this, $options));
	}
	public function token()
	{
		return $this->hasOne(UserLoginToken::class);
	}

}