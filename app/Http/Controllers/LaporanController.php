<?php
namespace App\Http\Controllers;

use App\Models\query;
use Illuminate\Http\Request;
use PDF;

class LaporanController extends Controller
{
    public function index(){
        $rpl = query::all();
        return view('query',['query'=>$rpl]);

    }

    public function cetak_pdf(){
        $rpl = query::all();
        $pdf = PDF::loadview('querypdf',['query'=>$rpl]);

        return $pdf->download('query');
    }
}