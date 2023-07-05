<?php

namespace App\Http\Controllers\modules;

use App\Http\Controllers\Controller;
use App\Models\RaisedIssue;
use App\Models\RaisedIssueResponse;
use Illuminate\Http\Request;

class ResolutionCenterController extends Controller
{
   public function index()
   {
      // $issues = RaisedIssue::join('users','users.id', '=', 'raised_issues.user_id')
      //    ->orderBy('raised_issues.created_at', 'DESC')->get();
      $issues = RaisedIssue::orderBy('created_at', 'DESC')->get();
      $issueDetails = null;

      return view('modules.resolution-center.index', compact('issues', 'issueDetails'));
   }

   public function issueDetails($id)
   {
      $issueDetails = RaisedIssue::find($id);
      if (!$issueDetails) {
         return redirect('/resolution-center')->with('error', 'Issue not found');
      }
      $issueDetails->load(['raisedIssueResponses' => function($query) {
         $query->orderBy('created_at', 'DESC');
      }]);
      $issues = RaisedIssue::orderBy('created_at', 'DESC')->get();

      return view('modules.resolution-center.index', compact('issues', 'issueDetails'));
   }

   public function respond(Request $request)
   {
      RaisedIssueResponse::create([
         'admin_id' => auth()->user()->id,
         'raised_issue_id' => $request->raised_issue_id,
         'response' => $request->response,
         'isAdminResponse' => true
      ]);

      $redirectUrl = redirect()->back()->with('success', 'Response recoreded successfully')->getTargetUrl();

      return $request->wantsJson() ? new JsonResponse(['redirectPath' => $redirectUrl], 200) : redirect()->back()->with('success', 'Response recorded successfully');
   }

   public function delete($id)
   {
      $issue = RaisedIssue::find($id);

      $issue->raisedIssueResponses->each(fn ($response) => $response->delete());

      $issue->delete();

      return redirect()->route('resolution-center.index');
   }
}
