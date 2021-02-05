<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Issues\Issue;

class HomeController extends Controller
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

        $new_issues = Issue::where('issue_status', 'NEW')->count();

        return view('home')->with([
            'new_issues' => $new_issues
        ]);
    }
}
