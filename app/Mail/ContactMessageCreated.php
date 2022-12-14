<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Contacts;

class ContactMessageCreated extends Mailable
{
    use Queueable, SerializesModels;
    public $msg;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Contacts $msg)
    {
        
        $this->msg = $msg;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return  $this->from( $this->msg->email, $this->msg->name)
                  ->markdown('emails.messages.created');
    }
}
