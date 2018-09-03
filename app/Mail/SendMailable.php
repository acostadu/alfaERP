<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendMailable extends Mailable
{
    use Queueable, SerializesModels;
    public $demo;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($demo)
    {
        $this->demo = $demo;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        //return $this->view('mails.name');
        return $this->from('scaner@cimeplas.cl', 'Scaner')
            ->subject('Cotizacion de Venta')
            ->view('mails.name')
            ->with(['testVarOne' => '1', 'testVarTwo' => '2'])
            ->attach(storage_path('\app\public\pdf\cotizacion').'\001.pdf', ['as' => '001.pdf', 'mime' => 'application/pdf']);      
    }
}
