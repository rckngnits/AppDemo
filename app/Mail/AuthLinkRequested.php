<?php

namespace App\Mail;

use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class AuthLinkRequested extends Mailable
{
    use Queueable, SerializesModels;

    public $user;

    public $options;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $user, $options)
    {
        $this->user = $user;
        $this->options = $options;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Your Login Link')->view('email.auth.passlessauth.link')->with([
            'link' => $this->buildlink(),
            ]);
    }

    protected function buildLink()
    {
        return url('/login/passlessauth/'.$this->user->token->token. '?' . http_build_query($this->options));
    }
}
