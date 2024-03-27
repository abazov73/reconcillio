<?php

namespace App\Http\Controllers\Web\Reconcillio\Invoice;

use App\Http\Controllers\Controller;
use App\Jobs\SendInvoices;
use App\Services\Reconcillio\Invoice\InvoiceServiceInterface;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Log;

class InvoiceIndexController extends Controller
{
    public function __construct(
        private readonly InvoiceServiceInterface $invoiceService,
    ) {
    }

    public function __invoke(): View
    {
        Log::info('Veiwing invoices');
        dispatch(new SendInvoices());
        $invoices = $this->invoiceService->index();

        return view('Reconcillio.Invoices.index', compact('invoices'));
    }
}
