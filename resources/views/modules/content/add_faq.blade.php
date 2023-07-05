@extends('layouts.app')
@section('title','FAQ | Create')
@section('breadcrumb')
   <div class="content-header row">
      <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
         <h3 class="content-header-title mb-0 d-inline-block"><i class="fal fa-folder-tree"></i> FAQs</h3>
         <div class="row breadcrumbs-top d-inline-block">
            <div class="breadcrumb-wrapper col-12">
               <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{!! url('/') !!}">Home</a></li>
                  <li class="breadcrumb-item"><a href="{!! route('content.faqs') !!}">FAQs</a></li>
                  <li class="breadcrumb-item active">Create</li>
               </ol>
            </div>
         </div>
      </div>
      <div class="content-header-right col-md-6 col-12"></div>
   </div>
@endsection
@section('content')
@include('partials._messages')
{!! Form::open(array('route' => 'content.faq.create','enctype'=>'multipart/form-data','method' => 'post')) !!}
@csrf()
<div class="row">
   <div class="col-md-6">
      <div class="card">
         <div class="card-body">
            <!-- Text inputs -->
            <div class="form-group required">
               {!! Form::label('question', 'Question', array('class'=>'control-label')) !!}
               {!! Form::text('question', null, array('class' => 'form-control', 'placeholder' => 'Enter Question','required' => '')) !!}
            </div>
            <div class="form-group required">
               {!! Form::label('answer', 'Answer', array('class'=>'control-label')) !!}
               {!! Form::textarea('answer', null, array('class' => 'form-control', 'placeholder' => 'Enter Answer')) !!}
            </div>
            <center>
               <button type="submit" name="button" class="btn btn-success submit"><i class="far fa-save"></i> Add FAQ</button>
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
