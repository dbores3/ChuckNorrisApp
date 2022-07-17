<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class EmailJokes extends Mailable {
    use Queueable, SerializesModels;

    /**
     * The email object instance.
     *
     * @var Email
     */
    public $email;
 
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($email)
    {
        $this->email = $email;
    }
 
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(){
        return $this->subject($this->email->subject)
            ->view($this->email->template)
            ->with([
                'title' => $this->email->title,
                'joke' => $this->email->joke,
            ]);
    }
}