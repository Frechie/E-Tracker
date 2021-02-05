@extends('inc.layout')

@section('content')

@if( $issuesRecords->count() === 0 )
<h4 class="text-danger">No available data found!!</h4>
@else

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
@endif
@endsection