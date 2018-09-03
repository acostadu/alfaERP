<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use PDF;

class PdfController extends Controller
{
    public function invoice() 
    {

        //$data = $this->getData();
        //$date = date('Y-m-d');
        //$invoice = "2222";
        $data = ['title' => 'Welcome to HDTuto.com', 'invoice' => '2222', 'fecha' => date('Y-m-d')];

        $pdf = PDF::loadView('pdf.invoice', $data);


        return $pdf->download('hdtuto.pdf');  	

		/*$dompdf = new Dompdf();

        $data = $this->getData();
        $date = date('Y-m-d');
        $invoice = "2222";
        $view =  View::make('pdf.invoice', compact('data', 'date', 'invoice'))->render();
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->stream('invoice');


		$dompdf->loadHtml('<h1>Prueba</h1>');
		$dompdf->setPaper('A4', 'landscape');
		$dompdf->render();
		$dompdf->stream();*/        
    }

    public function getData() 
    {
        $data =  [
            'quantity'      => '1' ,
            'description'   => 'some ramdom text',
            'price'   => '500',
            'total'     => '500'
        ];
        return $data;
    }
}
