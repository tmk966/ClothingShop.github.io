<?php

namespace App\Http\Controllers;

use App\DonHang;
use Illuminate\Http\Request;
use PDF;
//use Barryvdh\DomPDF\PDF;

class PDFController extends Controller
{
    public function pdf()
    {
        $hd = DonHang::all();
        $pdf = PDF::loadView('pdf', ['hd' => $hd]);
        return $pdf->download('hd.pdf');
    }
}
