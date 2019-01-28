<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;
    public $email;
    public $body;
    public $title;

    /**
     * Create a new message instance.
        
     * @return void
     */
    public function __construct($email,$body,$title)
    {
        //
        $this->email = $email;
        $this->body = $body;
        $this->title = $title;      
        
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // return $this->view('view.name');       
        
        return $this->view('messaging.email_template',['message'=>$this->body])->to($this->email)->subject($this->title);
    }
}
