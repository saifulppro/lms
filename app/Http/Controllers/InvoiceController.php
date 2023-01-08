<?php

namespace App\Http\Controllers;

use NumberFormatter;
use LaravelDaily\Invoices\Classes\Buyer;
use LaravelDaily\Invoices\Classes\InvoiceItem;
use Illuminate\Http\Request;
use App\Models\Invoice;


class InvoiceController extends Controller
{

    public function index(){
        return view('layouts.invoice.index');
    }
    public function show($id){
        $DBinvoice = Invoice::findOrFail($id);
    
        $customer = new Buyer([
            'name'          => $DBinvoice->user->name,
            'custom_fields' => [
                'email' => $DBinvoice->user->email,
            ],
        ]);
        

        $item = (new InvoiceItem())->title('Service 1')->pricePerUnit(2);

        $invoice = \LaravelDaily\Invoices\Invoice::make()
            ->buyer($customer)
            ->addItem($item);

        return $invoice->stream();
    }
    
}

