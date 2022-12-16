<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;



class CetakController extends Controller
{
    public function pdf()
    {
        $data['judul'] = "Laporan PDF";
        $pdf = \Pdf::loadView('detailvendorproductpdf', $data);
        return $pdf->download('invoice.pdf');
    }
}
