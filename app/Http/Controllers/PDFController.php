<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use PDF;

class PDFController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function generatePDF()
    {
        $products = Product::get();
        
        set_time_limit(300);
    
        $data = [
            'title' => 'Products Data',
            'date' => date('m/d/Y'),
            'products' => $products
        ]; 
        
        $pdf = PDF::loadView('products.myPDF', $data);

        return $pdf->download('itsolutionstuff.pdf');
    }
}