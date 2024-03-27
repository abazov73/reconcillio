@extends('layouts.app')
@section('content')
<div class="d-flex justify-content-center align-items-center">
    <div style="width: 85%" class="card my-2 align-self-center">
        <div class="card-header">
            New Invoice
        </div>
        <div class="card-body">
            <!-- Display Validation Errors -->
            @include('includes.errors')

            <form action="{{ route('invoices.store') }}" method="POST" class="form-horizontal">
                {{ csrf_field() }}
            
                <div class="form-group mb-2">
                    <label for="invoice-number" class="col-sm-3 form-label">Invoice number</label>
            
                    <div class="col-sm-6">
                        <input type="text" name="number" id="invoice-number" class="form-control">
                    </div>
                </div>

                <div class="form-group mb-2">
                    <label for="invoice-due_date" class="col-sm-3 form-label">Due date</label>
            
                    <div class="col-sm-6">
                        <input type="date" name="due_date" id="invoice-due_date" class="form-control">
                    </div>
                </div>

                <div class="form-group mb-2">
                    <label for="invoice-send_date" class="col-sm-3 form-label">Send date</label>
            
                    <div class="col-sm-6">
                        <input type="date" name="send_date" id="invoice-send_date" class="form-control">
                    </div>
                </div>
            
                <div class="form-group mb-2">
                    <div class="col-sm-offset-3 col-sm-6">
                        <button type="submit" class="btn btn-primary">
                            Save
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection