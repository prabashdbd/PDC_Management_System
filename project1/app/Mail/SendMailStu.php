<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendMailStu extends Mailable
{
    use Queueable, SerializesModels;
    public $email_list;
    public $body;
    public $title;

    /**
     * Create a new message instance.
        
     * @return void
     */
    public function __construct($email_list,$body,$title)
    {
        //
        $this->email_list = $email_list;
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
        return $this->view('messaging.email_template',['message'=>$this->body])->to($this->email_list)->subject($this->title);
    }
}
