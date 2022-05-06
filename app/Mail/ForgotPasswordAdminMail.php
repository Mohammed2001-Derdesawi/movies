<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ForgotPasswordAdminMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
     public $data=[];
    public function __construct($data)
    {
        $this->data=$data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('Flixgo@example.com', 'Flixgo')->subject('Flixgo Change Admin Password')->view('admin.forgetpasswordemail')->with([
            'email'=>$this->data->data['email'],
            'token'=>$this->data->data['token'],
            'message'=>$this,

        ]);
    }
}
