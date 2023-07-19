@extends('layouts.app')
@section('title', 'FAQ | Edit')
@section('breadcrumb')
   <div class="content-header row">
      <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
         <h3 class="content-header-title mb-0 d-inline-block"><i class="fal fa-folder-tree"></i> FAQs</h3>
         <div class="row breadcrumbs-top d-inline-block">
            <div class="breadcrumb-wrapper col-12">
               <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                  <li class="breadcrumb-item"><a href="{{ route('content.faqs') }}">FAQs</a></li>
                  <li class="breadcrumb-item active">Edit</li>
               </ol>
            </div>
         </div>
      </div>
      <div class="content-header-right col-md-6 col-12"></div>
   </div>
@endsection

@section('content')
   @include('partials._messages')
   <form action="{{ route('content.faq.update', $edit->id) }}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="row">
         <div class="col-md-6">
            <div class="card">
               <div class="card-body">
                  <!-- Text inputs -->
                  <div class="form-group required">
                     <label for="question">Question</label>
                     <input type="text" class="form-control" id="question" name="question" placeholder="Enter Question" required value="{{ $edit->question }}">
                  </div>
                  <div class="form-group required">
                     <label for="answer">Answer</label>
                     <textarea class="form-control" id="answer" name="answer" placeholder="Enter Answer">{{ $edit->answer }}</textarea>
                  </div>
                  <!-- /text inputs -->
                  <center>
                     <button type="submit" class="btn btn-success submit"><i class="far fa-save"></i> Update FAQ</button>
                     <img src="{{ asset('assets/images/loader.gif') }}" alt="" class="submit-load" style="width:10%">
                  </center>
               </div>
            </div>
         </div>
      </div>
   </form>
@endsection
