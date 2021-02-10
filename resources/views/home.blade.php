@extends('inc.layout')
@section('content')

<div class="row">
    <div class="col-lg-3 col-md-6 stretch-card grid-margin">
        <div class="card bg-info card-img-holder text-white">
            <div class="card-body">
                <a class="text-white" href="{{ url('/dashboard/new') }}">
                    <img src="{{ asset('assets/images/dashboard/circle.svg') }}" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-bold mb-3">New Issues <i class="mdi mdi-bookmark-outline mdi-24px float-right"></i>
                    </h4>
                    <h1 class="mb-5 text-center">{{ $new_issues }}</h1>
                    <h6 class=""> View Issues </h6>
                </a>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-6 stretch-card grid-margin">
        <div class="card bg-danger card-img-holder text-white">
            <div class="card-body">
                <a class="text-white" href="{{ url('/dashboard/oustanding') }}">
                    <img src="{{ asset('assets/images/dashboard/circle.svg') }}" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-bold mb-3">Work in Progress
                     <i class="mdi mdi-chevron-double-right mdi-24px float-right"></i>
                    </h4>
                    <h2 class="mb-5 text-center">{{ $oustandingIssues }}</h2>
                    <h6 class="card-text">Increased by 60%</h6>
                </a>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-6 stretch-card grid-margin">
        <div class="card bg-success card-img-holder text-white">
            <div class="card-body">
                <a class="text-white" href="{{ url('/dashboard/oustanding') }}">
                    <img src="{{ asset('assets/images/dashboard/circle.svg') }}" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-bold mb-3">
                    Resolved Issues 
                    <i class="mdi mdi-checkbox-multiple-marked-circle mdi-24px float-right"></i>
                    </h4>
                    <h2 class="mb-5 text-center">{{ $completedIssues }} </h2>
                    <h6 class="card-text">Increased by 5%</h6>
                </a>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-6 stretch-card grid-margin">
        <div class="card bg-primary card-img-holder text-white">
            <div class="card-body">
                <img src="{{ asset('assets/images/dashboard/circle.svg') }}" class="card-img-absolute" alt="circle-image" />
                <h4 class="font-weight-bold mb-3">Total Issues 
                <i class="mdi mdi-chart-line mdi-24px float-right"></i>
                </h4>
                <h2 class="mb-5 text-center">{{ $allIssues }}</h2>
                <h6 class="card-text">Increased by 60%</h6>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Recent Issues</h4>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th> Assignee </th>
                                <th> Subject </th>
                                <th> Status </th>
                                <th> Last Update </th>
                                <th> Issue ID </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <img src="{{ asset('assets/images/faces/face1.jpg') }}" class="mr-2" alt="image"> David Grey
                                </td>
                                <td> Fund is not recieved </td>
                                <td>
                                    <label class="badge badge-gradient-success">Done</label>
                                </td>
                                <td> Dec 5, 2017 </td>
                                <td> WD-12345 </td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="{{ asset('assets/images/faces/face2.jpg') }}" class="mr-2" alt="image"> Stella Johnson
                                </td>
                                <td> High loading time </td>
                                <td>
                                    <label class="badge badge-gradient-warning">In-Progress</label>
                                </td>
                                <td> Dec 12, 2017 </td>
                                <td> WD-12346 </td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="{{ asset('assets/images/faces/face3.jpg') }}" class="mr-2" alt="image"> Marina Michel
                                </td>
                                <td> Website down for one week </td>
                                <td>
                                    <label class="badge badge-gradient-info">On-Hold</label>
                                </td>
                                <td> Dec 16, 2017 </td>
                                <td> WD-12347 </td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="{{ asset('assets/images/faces/face4.jpg') }}" class="mr-2" alt="image"> John Doe
                                </td>
                                <td> Loosing control on server </td>
                                <td>
                                    <label class="badge badge-gradient-danger">Rejected</label>
                                </td>
                                <td> Dec 3, 2017 </td>
                                <td> WD-12348 </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection