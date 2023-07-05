<div class="card-body responses">
   <div class="issue">
      <div class="issue-user-img">
         <img src="{{ config('services.app_url.url').'/storage/user/avatar/'.$issueDetails->user->avatar }}" alt="{{ $issue->user->f_name }}">
      </div>
      <div class="issue-details">
         <h5>{{ $issueDetails->user->f_name }} {{ $issueDetails->user->l_name }}</h5>
         <h4>{{ $issueDetails->issue }}</h4>
         <p><strong>{{ $issueDetails->created_at->diffForHumans() }}</strong></p>
      </div>
   </div>
   <hr>
   <form action="{{ route('resolution-center.response') }}" method="POST">
      @csrf
      <input type="hidden" name="raised_issue_id" value="{{ $issueDetails->id }}">
      <div class="form-group">
         <label for="response">Enter response</label>
         <textarea name="response" id="response" class="response-textarea form-control" placeholder="Enter your response here..."></textarea>
      </div>
      <button class="btn btn-reply">Reply</button>
   </form>
   @forelse ($issueDetails->raisedIssueResponses as $response)
      <div class="response @if($response->isAdminResponse) admin-response @endif">
         @if ($response->isAdminResponse)
            <img class="response-user-image" src="{!! url('/') !!}/assets/images/user.png" alt="avatar">
         @else
            <img class="response-user-image" src="{{ config('services.app_url.url').'/storage/user/avatar/'.$response->user->avatar }}" alt="{{ $response->user->f_name }}" class="avatar">
         @endif
         <span class="response-text">
            @if (!$response->isAdminResponse)
               <h5>{{ $response->user->f_name }} {{ $response->user->l_name }}</h5>
            @endif
            <p>{{ $response->response }}</p>
            <p><strong>{{ $response->created_at->diffForHumans() }}</strong></p>
         </span>
      </div>
   @empty
      <span>No responses provided yet</span>
   @endforelse
</div>
