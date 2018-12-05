<?php

namespace App\Mail;

use App\Form;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class MessageReceived extends Mailable
{
    use Queueable, SerializesModels;

    protected $model;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->model = new Form();
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('Emails.sender', [
            'models' => $this->model->getRecent(),
        ]);
    }
}
