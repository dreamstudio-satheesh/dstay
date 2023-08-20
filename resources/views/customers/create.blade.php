@extends('layouts.master')
@section('title') @lang('translation.dashboards') @endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1') Pages @endslot
@slot('title') Add Customers  @endslot
@endcomponent


    <div class="card">
        <form action="{{ route('customers.store') }}"  method="POST" >
            @csrf
        <div class="card-body">

            @if ($errors->any())
            <div class="mb-3">
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
            @endif
            

            <div class="mb-3">
                <label for="customername-field" class="form-label">Name</label>
                <input type="text" name="name" id="customername-field" class="form-control" placeholder="Enter Name" required="">
                <div class="invalid-feedback">Please enter name.</div>
            </div>

            <div class="mb-3">
                <label for="phone-field" class="form-label">Mobile</label>
                <input type="text" name="mobile" id="phone-field" class="form-control" placeholder="Enter Mobile" required="">
                <div class="invalid-feedback">Please enter a phone.</div>
            </div> 

            <div class="mb-3">
                <label for="email-field" class="form-label">address</label>
                <input type="text" name="address" id="email-field" class="form-control" placeholder="Enter Address" required="">
                <div class="invalid-feedback">Please enter address.</div>
            
                   

           
        </div>
        <div class="card-footer" >
            <div class="hstack gap-2 justify-content-end">
                
                <input type="submit" class="btn btn-success" value="Add User">
            </div>
        </div>
    </form>
</div>


@endsection
@section('script')
<script src="{{ URL::asset('/admin_assets/js/app.min.js') }}"></script>
@endsection