<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class StudentAddMail extends Mailable
{
    use Queueable, SerializesModels;
    public $email;
    public $name;
    public $username;
    public $password;


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($email,$name,$username,$password)
    {
        //
        $this->email = $email;
        $this->name = $name;
        $this->username = $username;
        $this->password = $password;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('student.student_add_mail',['name'=>$this->name,'username'=>$this->username,'password'=>$this->password])->to($this->email)->subject('Login credentials for PDC system');
    }
}
