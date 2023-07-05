@extends('layouts.app')
@section('title','Category')
@section('breadcrumb')
   <div class="content-header row">
      <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
         <h3 class="content-header-title mb-0 d-inline-block"><i class="fal fa-folder-tree"></i> Category</h3>
         <div class="row breadcrumbs-top d-inline-block">
            <div class="breadcrumb-wrapper col-12">
               <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{!! url('/') !!}">Home</a></li>
                  <li class="breadcrumb-item active"><a href="#">Category</a></li>
               </ol>
            </div>
         </div>
      </div>
      <div class="content-header-right col-md-6 col-12"></div>
   </div>
@endsection
@section('content')
<div class="card">
   <div class="card-body">
      @include('partials._messages')
      <table class="table table-striped table-bordered zero-configuration">
         <thead>
            <tr>
               <th width="2%">#</th>
               <th width="12%"></th>
               <th>Title</th>
               {{-- <th>Description</th>
               <th width="8%">Status</th> --}}
               <th width="10%">Action</th>
            </tr>
         </thead>
         <tbody>
            @foreach($categories as $count=>$cat)
               <tr>
                  <td>{!! $count+1 !!}</td>
                  <td><img src="{!! asset('storage/category/'.$cat->image) !!}" alt="" width="100%"></td>
                  <td>{!! $cat->name !!}</td>
                  {{-- <td>{!! $cat->description !!}</td>
                  <td>
                     <span class="badge {!! $cat->status !!}">{!! $cat->status !!}</span>
                  </td> --}}
                  <td>
                     <a href="{!! route('category.edit',$cat->id) !!}" class="btn btn-md btn-info"><i class="fas fa-edit"></i> Edit</a>
                  </td>
               </tr>
            @endforeach
         </tbody>
      </table>
   </div>
</div>
@endsection
{{-- page scripts --}}
@section('script')

@endsection
