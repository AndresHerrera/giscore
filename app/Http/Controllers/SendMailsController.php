<?php

namespace GisCore\Http\Controllers;

use Illuminate\Http\Request;
use GisCore\Http\Controllers\Controller;

use GisCore\Mail\MailContacForm;
use Illuminate\Support\Facades\Mail;

use Illuminate\Contracts\Routing\ResponseFactory;

class SendMailsController extends Controller
{
    public function indexOption($option)
    {
        return view('geopalmira.contactform',['option' => $option]);
    }


    public function index()
    {
        return view('geopalmira.contactform');
    }

    public function sendMail( Request $request)
    {
    	$name= $request->name;
    	$email= $request->email;
    	$content= $request->content;

    	$datos = array( 'name' => $name , 'email' => $email , 'content' => $content);

    	Mail::to('destino@gmail.com')->send(new MailContacForm($datos));

    	return view('geopalmira.contactform_sent')->with('datos',$datos);
    }


    public function sendMailModal( Request $request)
    {
        $name= $request->name;
        $email= $request->email;
        $content= $request->content;

        $datos = array( 'name' => $name , 'email' => $email , 'content' => $content);

        Mail::to('destino@gmail.com')->send(new MailContacForm($datos));

        return response()->json(['name' => $name, 'message' => ''.trans('messages.thankscontact').''  ]); 
    }
}
