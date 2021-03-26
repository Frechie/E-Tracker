<?php

namespace App\Http\Controllers\Issues;

use App\Http\Controllers\Controller;
use App\Models\Issues\Issue;
use App\Models\Categories\Category;
use Illuminate\Http\Request;


class IssuesController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $issues = Issue::orderBy('created_at', 'DESC')->get();

        return view('issues.issues')->with('issuesRecords', $issues);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $category = Category::all();

        return view('issues.create_issues')->with('categories', $category);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)  {
        $filenameToStore = '';

        if ($request->hasFile('issue_upload')) {
            $filenameToStore =  $this->uploadFile($request);
        }

        $issue = Issue::create([
            'issue_description' => $request->input('issue_desc'),
            'issue_category'  => $request->input('asset_class'),
            'issue_sub_category'  => $request->input('issue_cat'),
            'severity'  => $request->input('issue_severity'),
            'issue_uploads'  => 'storage/issues/'.$request->user()->name.'/'.$filenameToStore,
            'issue_raised_by_uid' => $request->user()->id,
            'issue_status' => 'NEW',
            'issue_subject' => $request->input('issue_subject')
        ]);

        if ($issue) {
            $request->file('issue_upload')->storeAs('issues/'.$request->user()->name, $filenameToStore);
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
        $issue = Issue::findOrFail($id);
        $category = Category::all();
        // return $issue;

        return view('issues.issue')->with(['issue' => $issue, 'categories' => $category]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Issues\Issue  $issue
     * @return \Illuminate\Http\Response
     */
    public function edit(Issue $issue) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Issues\Issue  $issue
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Issue $issue) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Issues\Issue  $issue
     * @return \Illuminate\Http\Response
     */
    public function destroy(Issue $issue) {
        //
    }

    //FileUpload Function
    public function uploadFile(Request $request) {

        $upload =  $request->file('issue_upload')->getClientOriginalName();
        $fileName = pathinfo($upload, PATHINFO_FILENAME);
        $uploadExt = $request->file('issue_upload')->extension();

        return $fileName. '_'.time(). '.'.$uploadExt;
    }
}
