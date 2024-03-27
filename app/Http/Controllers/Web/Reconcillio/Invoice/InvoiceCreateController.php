<?php

namespace App\Http\Controllers\Web\Reconcillio\Invoice;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Log;

class InvoiceCreateController extends Controller
{
    public function __invoke(): View
    {
        Log::info('Opening invoice creation form');
        
        return view('Reconcillio.Invoices.create');
    }
}
