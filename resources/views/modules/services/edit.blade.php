<!-- services.edit.blade.php -->
@extends('layouts.app')

@section('breadcrumb')
   <div class="content-header row">
      <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
         <h3 class="content-header-title mb-0 d-inline-block"><i class="far fa-bullhorn"></i> Services</h3>
         <div class="row breadcrumbs-top d-inline-block">
            <div class="breadcrumb-wrapper col-12">
               <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{!! url('/') !!}">Home</a></li>
                  <li class="breadcrumb-item"><a href="#">Service</a></li>
                  <li class="breadcrumb-item active">Edit</li>
               </ol>
            </div>
         </div>
      </div>
      <div class="content-header-right col-md-6 col-12"></div>
   </div>
@endsection

@section('content')
    <div class="container">
        <form action="{{ route('services.update', $service->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="service_title">Service Title</label>
                <input type="text" class="form-control" id="service_title" name="service_title" value="{{ $service->service_title }}">
            </div>

            <div class="form-group">
                <label for="category">Category</label>
                <select class="form-control" id="category" name="category">
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ $service->category->id == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="service_contact_email">Contact Email</label>
                <input type="email" class="form-control" id="service_contact_email" name="service_contact_email" value="{{ $service->service_contact_email }}">
            </div>

            <div class="form-group">
                <label for="service_contact_phone_number">Contact Phone Number</label>
                <input type="text" class="form-control" id="service_contact_phone_number" name="service_contact_phone_number" value="{{ $service->service_contact_phone_number }}">
            </div>

            <div class="form-group">
                <label for="vendor">Vendor</label>
                <select class="form-control" id="vendor" name="vendor">
                    @foreach($vendors as $vendor)
                        <option value="{{ $vendor->id }}" {{ $service->vendor->id == $vendor->id ? 'selected' : '' }}>
                            {{ $vendor->company_name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection

@push('styles')
    <style>
        .custom-form {
            max-width: 500px;
            margin: 0 auto;
        }

        .custom-form .form-group label {
            font-weight: bold;
        }

        .custom-form button[type="submit"] {
            margin-top: 20px;
        }
    </style>
@endpush