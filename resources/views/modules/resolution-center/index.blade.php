@extends('layouts.app')
@section('title','Resolution Center | Tupange')
@section('stylesheets')
   <style>
      .issues {
         list-style: none;
         display: flex;
         flex-direction: column;
         margin-left: -45px;
      }
      .issues > .issue-item > .issue-item-link h5 {
         display: -webkit-box;
         -webkit-line-clamp: 3;
         -webkit-box-orient: vertical;
         overflow: hidden;
      }
      .issues > .issue-item {
         margin-bottom: 10px;
         padding: 15px;
         transition: .3s ease;
      }
      .issues .issue-item:hover {
         background-color: rgb(212, 212, 212);
         border-radius: 5px;
      }
      .issue-item-link {
         display: flex;
      }
      .issue-item-link img {
         width: 32px;
         height: 32px;
         object-fit: cover;
         border-radius: 50%;
         margin-right: 2px;
      }
      .issue {
         display: flex;
      }
      .issue-user-img img{
         width: 50px;
         height: 50px;
         border-radius: 50%;
         object-fit: cover;
         margin-right: 2px;
      }
      .delete-issue-link {
         float: right;
      }
      .responses {
         background: rgb(233, 233, 233);
         padding: 15px;
         border-radius: 5px;
      }

      .response {
         display: flex;
         background: rgb(199, 199, 199);
         padding: 15px;
         border-radius: 5px;
         margin-bottom: 1px;
      }
      .responses > .admin-response {
         border: 3px solid rgb(84, 84, 84);
      }
      .responses > .admin-response img {
         border: 3px solid rgb(84, 84, 84);
      }
      .response-user-image {
         width: 50px;
         height: 50px;
         margin-right: 10px;
         border-radius: 50%;
         object-fit: cover;
      }
      .btn-reply {
         margin: -15px 0 10px 0;
         padding: 10px;
         background-color: #1DA1F2;
         color: #fff;
         border-radius: 3px;
      }
   </style>
@endsection
@section('content')
   <div class="row">
      <div class="col-md-4">
         <div class="card">
            <div class="card-header">
               Raised Issues
            </div>
            <div class="card-body">
               <ul class="issues">
                  @forelse ($issues as $issue)
                     <li class="issue-item">
                        <a href="{{ route('resolution-center.issue', $issue->id) }}" class="issue-item-link">
                           <img src="{{ config('services.app_url.url').'/storage/user/avatar/'.$issue->user->avatar }}" alt="">
                           <h5>{{ $issue->issue }}</h5>
                        </a>
                        <a href="{{ route('resolution-center.issue.delete', $issue->id) }}" class="delete-issue-link">
                           <i class="la la-trash-alt"></i>Delete
                        </a>
                        <hr>
                     </li>
                  @empty
                     <li class="issue-item no-issue-items text-center">No Issues have been raised yet...</li>
                  @endforelse
               </ul>
            </div>
         </div>
      </div>
      <div class="col-md-8">
         <div class="card">
            <div class="card-header">
               Raised Issue Details and Response
            </div>
            @if ($issueDetails)
               @include('partials._raised-issue')
            @else
               <h4 class="m-2 text-center">Select a raised issue to view details here...</h4>
            @endif
         </div>
      </div>
   </div>
@endsection
@section('scripts')
@endsection
