<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Email extends Mailable
{
    use Queueable, SerializesModels;

    //mail instance
    public $email_instance;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($email_instance)
    {
        $this->email_instance =  $email_instance;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('sender@example.com')
                    ->view('mails.email')
                    ->text('mails.plain_email')
                    ->with(
                    [
                            'testVarOne' => '1',
                            'testVarTwo' => '2',
                    ]);
                    // ->attach(public_path('/photos').'/demo.jpg', [
                    //         'as' => 'demo.jpg',
                    //         'mime' => 'image/jpeg',
                    // ]);
    }
}
