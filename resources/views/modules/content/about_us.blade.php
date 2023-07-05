@extends('layouts.app')
@section('title','Category | Create')
@section('breadcrumb')
   <div class="content-header row">
      <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
         <h3 class="content-header-title mb-0 d-inline-block"><i class="fal fa-folder-tree"></i> About Us Content</h3>
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
{!! Form::model($content, ['route' => ['content.about.update', $content->id], 'method'=>'post', 'enctype'=>'multipart/form-data']) !!}
   <div class="card">
      <div class="card-body">
         @include('partials._messages')
         <!-- Text inputs -->
         <div class="row">
            <div class="col-md-6">
               <div class="form-group required">
                  {!! Form::label('Main Content', 'Main Content', array('class'=>'control-label')) !!}
                  {!! Form::textarea('content', null, array('class' => 'form-control', 'placeholder' => 'Content','required' => '')) !!}
               </div>
               <div class="form-group form-group-default">
                  {!! Form::label('About Us Main Image', 'Main Image', array('class'=>'control-label')) !!}
                  {!! Form::file('about_us_image',array('class' => 'form-control','files'=> true)) !!}
               </div>
               <div class="form-group required">
                  {!! Form::label('Planner Content', 'Planner Content', array('class'=>'control-label')) !!}
                  {!! Form::textarea('for_planner_content', null, array('class' => 'form-control', 'placeholder' => 'Email','required' => '')) !!}
               </div>
               <div class="form-group form-group-default">
                  {!! Form::label('Planner Image', 'For Planner Image', array('class'=>'control-label')) !!}
                  {!! Form::file('for_planner_image',array('class' => 'form-control','files'=> true)) !!}
               </div>
               <div class="form-group required">
                  {!! Form::label('Vendor Content', 'Vendor Content', array('class'=>'control-label')) !!}
                  {!! Form::textarea('for_vendor_content', null, array('class' => 'form-control', 'placeholder' => 'Email','required' => '')) !!}
               </div>
               <div class="form-group form-group-default">
                  {!! Form::label('Vendor Image', 'For Vendor Image', array('class'=>'control-label')) !!}
                  {!! Form::file('for_vendor_image',array('class' => 'form-control','files'=> true)) !!}
               </div>
            </div>
            <div class="col-md-6">
               <div class="form-group required">
                  {!! Form::label('Step One TItle', 'Step One Title', array('class'=>'control-label')) !!}
                  {!! Form::text('step_one_title', null, array('class' => 'form-control', 'placeholder' => 'Email','required' => '')) !!}
               </div>
               <div class="form-group required">
                  {!! Form::label('Step One Content', 'Step One Content', array('class'=>'control-label')) !!}
                  {!! Form::textarea('step_one_content', null, array('class' => 'form-control', 'placeholder' => 'Email','required' => '')) !!}
               </div>
               <div class="form-group required">
                  {!! Form::label('Step Two Title', 'Step Two Title', array('class'=>'control-label')) !!}
                  {!! Form::text('step_two_title', null, array('class' => 'form-control', 'placeholder' => 'Email','required' => '')) !!}
               </div>
               <div class="form-group required">
                  {!! Form::label('Step Two Content', 'Step Two Content', array('class'=>'control-label')) !!}
                  {!! Form::textarea('step_two_content', null, array('class' => 'form-control', 'placeholder' => 'Email','required' => '')) !!}
               </div>
               <div class="form-group required">
                  {!! Form::label('Step Three Title', 'Step Three Title', array('class'=>'control-label')) !!}
                  {!! Form::text('step_three_title', null, array('class' => 'form-control', 'placeholder' => 'Email','required' => '')) !!}
               </div>
               <div class="form-group required">
                  {!! Form::label('Step Three Content', 'Step Three Content', array('class'=>'control-label')) !!}
                  {!! Form::textarea('step_three_content', null, array('class' => 'form-control', 'placeholder' => 'Email','required' => '')) !!}
               </div>
            </div>
         </div>
         <center>
            <button type="submit" name="button" class="btn btn-success submit"><i class="far fa-save"></i> Update Content</button>
            <img src="{!! asset('assets/images/loader.gif') !!}" alt="" class="submit-load" style="width:10%">
         </center>
      </div>
   </div>
{!! Form::close() !!}
@endsection
{{-- page scripts --}}
@section('scripts')
@endsection
