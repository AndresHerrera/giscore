<?php

namespace GisCore\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class MailContacForm extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    protected $datos;    

    public function __construct($datos)
    {
        $this->datos = $datos;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('geopalmira.contactform_view')
                    ->subject(trans('messages.contact_from') . ' - '.trans('messages.giscore_client_name').'')
                    ->with('datos',$this->datos)
                    ->from('geopalmira@gmail.com');
    }
}
