@extends('layouts.master')
@section('title') @lang('translation.dashboards') @endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1') Pages @endslot
@slot('title') Admin Users  @endslot
@endcomponent

<div class="row">

    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">List of Users</h5>
                <div class="d-flex justify-content-sm-end">
                    <div>
                        <a href="{{ url('/admin/users/create') }}" class="btn btn-primary add-btn"><i class="ri-add-line align-bottom me-1"></i> Add </a>
                    </div>
                  
                </div>
            </div>
            <div class="card-body">
    
                <table class="table table-nowrap">
                    <thead>
                    <tr>
                    <th scope="col">ID</th>
                    <th scope="col">name</th>
                    <th scope="col">email</th>
                    <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                    <tr>
                    <th scope="row"><a href="#" class="fw-semibold">#{{ $user->id }}</a></th>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                    
                        <div class="d-flex gap-2">
                            <div class="edit">
                                <button class="btn btn-sm btn-success edit-item-btn" data-bs-toggle="modal" data-bs-target="#showModal">Edit</button>
                            </div>
                            <div class="remove"> 
                                <form action="{{ route('users.destroy',$user->id) }}" method="POST"> 
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-primary remove-item-btn">Remove</button>
                                </form> 
                            </div>
                        </div>
                    </td>
                    
                    </tr>
                        @endforeach
                
                    </tbody>
                    </table>

            </div>

        </div>
    </div>
    
</div>
@endsection
@section('script')
<script src="{{ URL::asset('/admin_assets/js/app.min.js') }}"></script>

@endsection