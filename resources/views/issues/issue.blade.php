@extends('inc.layout')

@section('content')

@if( $issue->count() === 0 )
<h4 class="text-danger">No available data found!!</h4>
@else

<div class="row">
    <div class="col-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title"> Issues</h4>
                <div class="table-responsive">
                    <table class="table table-hover table-striped">
                        <thead class="bg-primary text-white">
                            <tr>
                                <th> Issue ID </th>
                                <th> Created By </th>
                                <th> Subject </th>
                                <th> Status </th>
                                <th> Date Created </th>

                            </tr>
                        </thead>
                        <tbody>
                          
                            <tr>
                                <td><a href="{{ url('/issues') }}/{{$issue->id }}"> {{ date('ymd').'-'.$issue->id}}</a> </td>
                                <td>
                                   {{ $issue->user->name}}
                                </td>
                                <td> {{ $issue->issue_subject }}</td>
                                <td>
                                    <label class="badge badge-gradient-info">{{ $issue->issue_status}}</label>
                                </td>
                                <td> {{$issue->created_at}} </td>

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