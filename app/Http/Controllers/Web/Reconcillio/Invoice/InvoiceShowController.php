<?php

namespace App\Http\Controllers\Web\Reconcillio\Invoice;

use App\Http\Controllers\Controller;
use App\Models\Reconcillio\Invoice;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Log;

class InvoiceShowController extends Controller
{
    public function __invoke(Invoice $invoice): View
    {
        Log::info("Veiwing invoice #$invoice->number");

        return view('Reconcillio.Invoices.show', compact('invoice'));
    }
}
