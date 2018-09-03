<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailable;

class HomeController extends Controller
{
	public function mail()
	{

		$objDemo = new \stdClass();
		$objDemo->demo_one = 'Soporte TI Alfaplas';
		$objDemo->demo_two = 'Demo Two Value';
        $objDemo->sender = 'Ventas Alfaplas';
        $objDemo->receiver = 'Danny Acosta';		
		//$name = 'Soporte TI Alfaplas';

		Mail::to('acostadu@gmail.com')->send(new SendMailable($objDemo));
	   
	   return 'El correo fue enviado';
	}
}
