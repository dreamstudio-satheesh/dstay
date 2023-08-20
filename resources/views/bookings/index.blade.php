@extends('layouts.master')
@section('title') Booking List @endsection

@section('css')
<!--datatable css-->
<link href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" rel="stylesheet" type="text/css" />
<!--datatable responsive css-->
<link href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css" rel="stylesheet" type="text/css" />
@endsection

@section('content')
@component('components.breadcrumb')
@slot('li_1') Pages @endslot
@slot('title') Booking  @endslot
@endcomponent

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">List of Booking</h5>
                <div class="d-flex justify-content-sm-end">
                    <div>
                        <a href="{{ url('/admin/customers/create') }}" class="btn btn-primary add-btn"><i class="ri-add-line align-bottom me-1"></i> Add </a>
                    </div>
                  
                </div>
            </div>
            <div class="card-body">
                <table id="buttons-datatables" class="display table table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Customer Name</th>
                            <th>Property</th>
                            <th>date</th>
                            <th>Action</th>
                        </tr>
                    </thead>                   
                     <tbody>
                            @foreach ($bookings as $booking)
                        <tr>
                        <th scope="row"><a href="#" class="fw-semibold">#{{ $booking->id }}</a></th>
                        <td>{{ $booking->customer->name }}</td>
                        <td>{{ $booking->property->name }}</td>
                        <td>{{ $booking->check_in_date }} - {{ $booking->check_out_date }}</td>
                        <td>
                          
                            <div class="d-flex gap-2">
                                <div class="edit">
                                    <a href="{{ route('bookings.edit',$booking->id) }}" class="btn btn-sm btn-success edit-item-btn">Edit</a>
                                </div>
                                <div class="remove"> 
                                    <form action="{{ route('bookings.destroy',$booking->id) }}" method="POST"> 
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

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>

<script>
  document.addEventListener('DOMContentLoaded', function () {
  let table = new DataTable('#buttons-datatables', {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'print', 'pdf'
        ]
        
    });
}); 
</script>

<script src="{{ URL::asset('/admin_assets/js/app.min.js') }}"></script>

@endsection
