<?php

namespace App\Http\Controllers\Issues;

use App\Http\Controllers\Controller;
use App\Models\Issues\Issue;
use Illuminate\Http\Request;


class IssuesController extends Controller {

    public function __construct()    {
        $this->middleware(['auth', 'verified']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $issues = Issue::all();

        return view('issues.issues')->with('issuesRecords', $issues);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        return view('issues.create_issues');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {

        $filenameToStore = '';

        if ($request->hasFile('issue_upload')){


        $upload =  $request->file('issue_upload')->getClientOriginalName();
        $fileName = pathinfo($upload, PATHINFO_FILENAME);
        $uploadExt = $request->file('issue_upload')->extension();

        $filenameToStore = $fileName.'_'.time().'.'.$uploadExt;
        
        }

        $user = $request->user()->name;
        
        $issue = Issue::create([

            'issue_description' => $request->input('issue_desc'),
            'issue_category'  => $request->input('asset_class'),
            'issue_sub_category'  => $request->input('issue_cat'),
            'severity'  => $request->input('issue_severity'),
            'issue_uploads'  => 'storage/issues/'.$user.'/'.$filenameToStore,
            'issue_raised_by_uid' => $request->user()->id,
            'issue_status' => 'NEW',
            'issue_subject' => $request->input('issue_subject')
        ]);

        if ($issue){
            $request->file('issue_upload')->storeAs('issues/'.$user, $filenameToStore);
        }
        //Retrieve  user input 
        return redirect('issues');

       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Issues\Issue  $issue
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $issue = Issue::find($id);

       // return $issue;

        return view('issues.issue')->with('issue', $issue);
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Issues\Issue  $issue
     * @return \Illuminate\Http\Response
     */
    public function edit(Issue $issue)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Issues\Issue  $issue
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Issue $issue)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Issues\Issue  $issue
     * @return \Illuminate\Http\Response
     */
    public function destroy(Issue $issue)
    {
        //
    }
}
