<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Mail\DemoEmail;
use Illuminate\Support\Facades\Mail;

class MailerController extends Controller
{
    public function send()
    {
        $objDemo = new \stdClass();
        $objDemo->demo_one = 'Demo One Value';
        $objDemo->demo_two = 'Demo Two Value';
        $objDemo->sender = 'Ventas Alfaplas';
        $objDemo->receiver = 'Danny Acosta';

        Mail::to('ainformatica@alfaplas.cl')->send(new DemoEmail($objDemo));
    }
}
