<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Issues\Issue;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()    {
        $this->middleware(['auth', 'verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()  {

        //$new_issues = Issue::where('issue_status', 'NEW')->count();
        $allIssues = Issue::all();

        $new_issues = $allIssues->where('issue_status', 'NEW')->count();
        $countCompletedIssues = $allIssues->where('issue_status', 'Resolved')->count();
        $countOutstandingIssues = $allIssues->where('issue_status', 'Work-in-Progress')->count();
        $pendingHDIssues = $allIssues->where('issue_status', 'Pending-Hd')->count();
        //$countAllIssues = $allIssues->count();

        return view('home')->with([
            'new_issues' => $new_issues,
            'completedIssues' =>  $countCompletedIssues,
            'issues_in_progress' => $countOutstandingIssues,
            'pendingHDIssues' => $pendingHDIssues
        ]);
    }
}
