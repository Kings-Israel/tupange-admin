@extends('layouts.app')
{{-- page header --}}
@section('title','Services')

@section('breadcrumb')
   <div class="content-header row">
      <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
         <h3 class="content-header-title mb-0 d-inline-block"><i class="far fa-bullhorn"></i> Services</h3>
         <div class="row breadcrumbs-top d-inline-block">
            <div class="breadcrumb-wrapper col-12">
               <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{!! url('/') !!}">Home</a></li>
                  <li class="breadcrumb-item"><a href="#">Services</a></li>
                  <li class="breadcrumb-item active">List</li>
               </ol>
            </div>
         </div>
      </div>
      <div class="content-header-right col-md-6 col-12"></div>
   </div>
@endsection
{{-- content section --}}
@section('content')
   @include('partials._messages')
   <div class="row">
      <div class="col-md-12">
         <div class="card">
            <div class="card-body">
               <h4>All Services</h4>
               <hr>
               <table class="table table-striped table-bordered zero-configuration">
   <thead>
      <tr>
         <th width="1%">#</th>
         <th></th>
         <th>Title</th>
         <th>Category</th>
         <th>Orders Count</th>
         <th>Email</th>
         <th>Phone number</th>
         <th>Vendor</th>
         <th>Actions</th>
      </tr>
   </thead>
   <tbody>
      @foreach($services as $count=>$item)
         <tr>
            <td>{!! $count+1 !!}</td>
            <td></td>
            <td>
               {!! $item->service_title !!}
               @if($item->featured == 1)
                  <span class="badge-warning" style="padding: 0 5px; color: white; border-radius: 50px; cursor: pointer">Featured</span>
               @endif
               @if($item->status == 1)
                  <span class="badge-success" style="padding: 0 5px; color: white; border-radius: 50px; cursor: pointer">Active</span>
               @else
                  <span class="badge-danger" style="padding: 0 5px; color: white; border-radius: 50px; cursor: pointer">Disabled</span>
               @endif
            </td>
            <td>{!! $item->category ? $item->category->name : '' !!}</td>
            <td>{!! $item->orders_count !!}</td>
            <td>{!! $item->service_contact_email !!}</td>
            <td>{!! $item->service_contact_phone_number !!}</td>
            <td>{!! $item->vendor ? $item->vendor->company_name : '' !!}</td>

            <td>
               <div class="dropdown">
                  <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton{{ $item->id }}" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     Actions
                  </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton{{ $item->id }}">
                     <!-- Edit Button -->
                     <a class="dropdown-item" href="{{ route('services.edit', $item->id) }}">Edit</a>

                     @if($item->featured == 1)
                        <a class="dropdown-item" href="{{ route('services.unfeature', $item->id) }}">Unfeature</a>
                     @else
                        <a class="dropdown-item" href="{{ route('services.feature', $item->id) }}">Feature</a>
                     @endif
                     @if($item->status == 1)
                        <a class="dropdown-item" href="{{ route('services.disable', $item->id) }}">Disable</a>
                     @else
                        <a class="dropdown-item" href="{{ route('services.activate', $item->id) }}">Activate</a>
                     @endif


                     <!-- Delete Button -->
                     <form action="{{ route('services.destroy', $item->id) }}" method="POST" style="display: inline;">
                     @csrf
                     @method('DELETE')
                     <button type="submit" class="dropdown-item" onclick="return confirm('Are you sure you want to delete this service?')">Delete</button>
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
{{-- page scripts --}}
@section('script')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(function() {
   $('.switch input').on('change', function() {
      var serviceId = $(this).data('service-id');
      var featured = this.checked ? 1 : 0;

      // Perform an AJAX request to update the "featured" status
      $.ajax({
         method: 'POST',
         url: '/update-featured',
         data: {
            _token: '{{ csrf_token() }}',
            serviceId: serviceId,
            featured: featured
         },
         success: function(response) {
            // Handle success response, if needed
         },
         error: function(xhr, status, error) {
            // Handle error response, if needed
         }
      });
   });
});

</script>

@endsection

