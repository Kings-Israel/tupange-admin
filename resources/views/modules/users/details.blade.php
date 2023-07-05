@extends('layouts.app')
{{-- page header --}}
@section('title','User Details')
@section('breadcrumb')
   <div class="content-header row">
      <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
         <h3 class="content-header-title mb-0 d-inline-block"><i class="fal fa-users"></i> Users</h3>
         <div class="row breadcrumbs-top d-inline-block">
            <div class="breadcrumb-wrapper col-12">
               <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{!! url('/') !!}">Home</a></li>
                  <li class="breadcrumb-item"><a href="{{ route('users.index') }}">Users</a></li>
                  <li class="breadcrumb-item active">{!! $user->f_name !!} {!! $user->l_name !!}</li>
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
      <div class="col-12 col-sm-7">
         <div class="media mb-2">
            <a class="mr-1" href="#">
               <img src="https://ui-avatars.com/api/?name={!! $user->f_name !!}&rounded=true&size=52" alt="users view avatar" class="users-avatar-shadow rounded-circle" height="52" width="52">
            </a>
            <div class="media-body pt-25">
               <h4 class="media-heading">
                  <span class="users-view-name">{!! $user->f_name !!} {{ $user->l_name }}</span>
               </h4>
               <b>Email:</b>
               <span class="users-view-id">{!! $user->email !!}</span><br>
               <b>Phone Number:</b>
               <span class="users-view-id">{!! $user->phone_number !!}</span>
            </div>
            @if ($user->is_suspended)
               <a href="{!! route('user.status.change',$user->id) !!}" class="btn btn-success btn-sm">Activate</a>
            @else
               <a href="{!! route('user.status.change',$user->id) !!}" class="btn btn-danger btn-sm">Suspend</a>
            @endif
         </div>
      </div>
      <div class="col-12 col-sm-5 px-0 d-flex justify-content-end align-items-center px-1 mb-2">
         {{-- <a href="#" class="btn btn-sm mr-25 border"><i class="ft-message-square font-small-3"></i></a>
         <a href="#" class="btn btn-sm mr-25 border">Profile</a>
         <a href="../../../html/ltr/vertical-menu-template/page-users-edit.html" class="btn btn-sm btn-primary">Edit</a> --}}
      </div>
   </div>
   <div class="row">
      <div class="col-md-12">
         <div class="card">
            <div class="card-body">
               <h4 class="mb-2">Orders</h4>
               <table class="table table-striped table-bordered zero-configuration">
                  <thead>
                     <tr>
                        <th width="1%">#</th>
                        <th>OrderID</th>
                        <th>Amount</th>
                        {{-- <th>Customer</th> --}}
                        <th>Order Date</th>
                        <th>Vendor</th>
                        <th>Status</th>
                        <th>Action</th>
                     </tr>
                  </thead>
                  <tbody>
                     @foreach($orders as $count=>$item)
                        <tr>
                           <td>{!! $count+1 !!}</td>
                           <td>{!! $item->order_id !!}</td>
                           <td>ksh {!! number_format($item->service_pricing_price) !!}</td>
                           {{-- <td>{!! $item->name !!}</td> --}}
                           <td>{!! date('F jS, Y', strtotime($item->orderDate)) !!}</td>
                           <td>{!! $item->company_name !!}</td>
                           <td><span class="badge">{!! $item->status !!}</span></td>
                           <td>
                              <a href="{{ route('orders.details', $item->id) }}">
                                 <span class="badge-success" style="padding: 0 5px; color: white; border-radius: 3px; cursor: pointer">View</span>
                              </a>
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

@endsection
