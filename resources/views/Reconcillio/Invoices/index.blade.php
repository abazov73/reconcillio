@extends('layouts.app')
@section('content')
    <div class="d-flex justify-content-center align-items-center">
        <div style="width: 85%" class="card my-2 align-self-center">
            <div class="card-header d-flex flex-row align-items-center justify-content-between">
                Invoices
                <a class="btn btn-success" href="{{route('invoices.create')}}">
                    <i class="fa fa-plus"></i> Create
                </a>
            </div>

            <div class="card-body">
                @if(count($invoices) > 0)
                <table class="table table-striped task-table">

                    <!-- Table Headings -->
                    <thead>
                        <th>Invoice Number</th>
                        <th>Due date</th>
                        <th>Send date</th>
                        <th>Status</th>
                    </thead>

                    <!-- Table Body -->
                    <tbody>
                        @foreach ($invoices as $invoice)
                            <tr>
                                <td class="table-text">
                                    <div><a href="{{ route('invoices.show', $invoice) }}">{{ $invoice->number }}</a></div>
                                </td>
                                <td class="table-text">{{ $invoice->due_date?->format('d.m.Y') }}</td>
                                <td class="table-text">{{ $invoice->send_date?->format('d.m.Y') }}</td>
                                <td class="table-text">{{ $invoice->is_sent ? 'Sent' : 'Awaiting' }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                @endif
            </div>
        </div>
    </div>
@endsection