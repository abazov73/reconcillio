<?php

namespace App\Jobs;

use App\Mail\InvoiceMail;
use App\Models\Reconcillio\Invoice;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class SendInvoices implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public function __construct(
    ) {
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        try {
            Log::info('Sending invoices');

            DB::transaction(function () {
                Invoice::query()
                    ->where('is_sent', false)
                    ->whereDate('send_date', '<=', now())
                    ->get()
                    ->each(function (Invoice $invoice) {
                        Mail::to(User::query()->first())
                            ->send(new InvoiceMail(
                                route('invoices.show', ['invoice' => $invoice->id]),
                            ));
                    });

                Invoice::query()
                    ->where('is_sent', false)
                    ->whereDate('send_date', '<=', now())
                    ->update(['is_sent' => true]);
            });
        } catch (\Exception $e) {
            Log::error('Send invoices job failed: '.$e->getMessage());
        }
    }
}
