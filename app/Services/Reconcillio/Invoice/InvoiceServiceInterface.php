<?php

namespace App\Services\Reconcillio\Invoice;

use App\Models\Reconcillio\Invoice;
use Illuminate\Support\Collection;

interface InvoiceServiceInterface
{
    public function create(array $data): ?Invoice;

    public function index(): Collection;
}
