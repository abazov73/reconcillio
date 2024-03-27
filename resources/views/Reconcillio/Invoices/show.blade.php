@extends('layouts.app')
@section('content')
    <div class="d-flex justify-content-center align-items-center">
        <div style="width: 85%" class="card my-2 align-self-center">
            <div class="card-header d-flex justify-content-between">
                Invoice №{{ $invoice->number }}
                <a class="btn-close" href="{{ route('invoices.index') }}"></a>
            </div>

            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Due date: {{ $invoice->due_date }}</li>
                    <li class="list-group-item">Send date: {{ $invoice->send_date }}</li>
                </ul>
            </div>
            
        </div>
    </div>
@endsection