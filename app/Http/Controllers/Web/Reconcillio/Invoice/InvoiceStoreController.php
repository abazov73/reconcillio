<?php

namespace App\Http\Controllers\Web\Reconcillio\Invoice;

use App\Http\Controllers\Controller;
use App\Http\Requests\InvoiceStoreRequest;
use App\Services\Reconcillio\Invoice\InvoiceServiceInterface;
use Illuminate\Http\RedirectResponse;

class InvoiceStoreController extends Controller
{
    public function __construct(
        private readonly InvoiceServiceInterface $invoiceService,
    ) {
    }

    public function __invoke(InvoiceStoreRequest $request): RedirectResponse
    {
        $this->invoiceService->create($request->validated());

        return to_route('invoices.index');
    }
}
