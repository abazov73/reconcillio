<?php

namespace App\Services\Reconcillio\Invoice;

use App\Models\Reconcillio\Invoice;
use Exception;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Log;

class InvoiceService implements InvoiceServiceInterface
{
    public function index(): Collection
    {
        return Invoice::query()->get();
    }

    public function create(array $data): ?Invoice
    {
        Log::info('Creating invoice');

        try {
            $invoice = Invoice::query()->create($data);
            Log::info('Invoice created');
        } catch (Exception $e) {
            Log::error('Invoice creation error: ' . $e->getMessage());

            return null;
        }

        return $invoice;
    }
}