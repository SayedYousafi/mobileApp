<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Barryvdh\DomPDF\Facade\Pdf;
use Picqer\Barcode\BarcodeGeneratorPNG;
use Picqer\Barcode\BarcodeGeneratorHTML;

class PDFController extends Controller
{
    public function index()
    {
        $generator = new BarcodeGeneratorPNG();
        $barcode=base64_encode($generator->getBarcode('123456789012',$generator::TYPE_EAN_13));

        $data=[
            'title'=>'Welcome to Barcode Generator',
            'barcode'=>$barcode,
        ];
        $pdf= Pdf::loadView('myPDF', $data);
        return $pdf->stream();
        //return $pdf->download('invoice.pdf');
    }

}
