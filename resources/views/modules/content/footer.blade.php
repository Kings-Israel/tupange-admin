@extends('layouts.app')
@section('title','Category | Create')
@section('breadcrumb')
   <div class="content-header row">
      <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
         <h3 class="content-header-title mb-0 d-inline-block"><i class="fal fa-folder-tree"></i> Footer Content</h3>
         <div class="row breadcrumbs-top d-inline-block">
            <div class="breadcrumb-wrapper col-12">
               <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{!! url('/') !!}">Home</a></li>
               </ol>
            </div>
         </div>
      </div>
      <div class="content-header-right col-md-6 col-12"></div>
   </div>
@endsection
@section('content')
{!! Form::model($content, ['route' => ['content.footer.update', $content->id], 'method'=>'post', 'enctype'=>'multipart/form-data']) !!}
   <div class="row">
      <div class="col-md-6">
         <div class="card">
            <div class="card-body">
               @include('partials._messages')
               <!-- Text inputs -->
               <div class="form-group required">
                  {!! Form::label('Main Content', 'Main Content', array('class'=>'control-label')) !!}
                  {!! Form::textarea('content', null, array('class' => 'form-control', 'placeholder' => 'Content','required' => '')) !!}
               </div>
               <div class="form-group required">
                  {!! Form::label('Contact Us Email', 'Contact Us Email', array('class'=>'control-label')) !!}
                  {!! Form::text('contact_us_email', null, array('class' => 'form-control', 'placeholder' => 'Email','required' => '')) !!}
               </div>
               <div class="form-group required">
                  {!! Form::label('Contact Us Phone Number', 'Contact Us Phone Number', array('class'=>'control-label')) !!}
                  {!! Form::text('contact_us_phone_number', null, array('class' => 'form-control', 'placeholder' => 'Email','required' => '')) !!}
               </div>
               <div class="form-group required">
                  {!! Form::label('Contact Us Address', 'Contact Us Address', array('class'=>'control-label')) !!}
                  {!! Form::text('contact_us_address', null, array('class' => 'form-control', 'placeholder' => 'Email','required' => '')) !!}
               </div>
               {{-- <div class="form-group form-group-default">
                  {!! Form::label('title', 'Image', array('class'=>'control-label')) !!}
                  {!! Form::file('image',array('class' => 'form-control','files'=> true)) !!}
               </div>
               <div class="form-group required">
                  {!! Form::label('title', 'Icon', array('class'=>'control-label')) !!}
                  {!! Form::text('icon', null, array('class' => 'form-control', 'placeholder' => 'Icon')) !!}
               </div> --}}
               {{-- <div class="form-group form-group-default">
                  {!! Form::label('title', 'Active Status', array('class'=>'control-label')) !!}
                  {{ Form::select('status',['' =>'Choose Status','Active' => 'Active', 'Closed' => 'Closed'], null, ['class' => 'form-control']) }}
               </div>
               <div class="form-group">
                  {!! Form::label('title', 'Description', array('class'=>'control-label')) !!}
                  {!! Form::textarea('description',null,['class'=>'form-control','size' => '4x4', 'placeholder'=>'type....']) !!}
               </div> --}}
               <!-- /text inputs -->
               <center>
                  <button type="submit" name="button" class="btn btn-success submit"><i class="far fa-save"></i> Update Content</button>
                  <img src="{!! asset('assets/images/loader.gif') !!}" alt="" class="submit-load" style="width:10%">
               </center>
            </div>
         </div>
      </div>
   </div>
{!! Form::close() !!}
@endsection
{{-- page scripts --}}
@section('scripts')
@endsection
