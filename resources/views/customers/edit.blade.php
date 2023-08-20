@extends('layouts.master')
@section('title') @lang('translation.dashboards') @endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1') Pages @endslot
@slot('title') Edit Customer  @endslot
@endcomponent


    <div class="card">
        <form action="{{ route('customers.update',$customer->id) }}"  method="POST" >
            @csrf
            @method('PUT')
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
                <input type="text" name="name" id="customername-field" class="form-control" value="{{ $customer->name }}"required="">
                <div class="invalid-feedback">Please enter  name.</div>
            </div>

            <div class="mb-3">
                <label for="email-field" class="form-label">Mobile</label>
                <input type="text" name="mobile" class="form-control"value="{{ $customer->mobile }}" required="">
                <div class="invalid-feedback">Please enter Mobile Number.</div>
            
            <div class="mb-3">
                <label for="phone-field" class="form-label">Address</label>
                <input type="text" name="address" id="phone-field" class="form-control" value="{{ $customer->address }}" required="">
               
            </div>

          
           

           
        </div>
        <div class="card-footer" >
            <div class="hstack gap-2 justify-content-end">                
                <input type="submit" class="btn btn-success" value="Update User">
            </div>
        </div>
    </form>
</div>


@endsection
@section('script')
<script src="{{ URL::asset('/admin_assets/js/app.min.js') }}"></script>
@endsection