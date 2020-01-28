<?php

namespace App\Http\Controllers\tenant;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Invoice;

class InvoiceController extends Controller
{
    //

    public function invoice($id){
        $invoice = Invoice::find($id);

        return view('tenant.pages.invoice', compact('invoice'));
    }

}
