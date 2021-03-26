@extends('inc.admin.portal-layout')

@section('content')

@if( $issues_type->count() === 0 )
<h4 class="text-danger">No available data found!!</h4>
@else

<div class="row">
    <div class="col-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">CASE STATUS: {{ strtoupper($requestType) }}</h4>
                <div class="table-responsive">
                    <table class="table table-hover table-striped">
                        <thead class="bg-primary text-white">
                            <tr>
                                <th> Case-ID </th>
                                <th> Created By </th>
                                <th> Subject </th>
                                <th> Status </th>
                                <th> Date Created </th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach($issues_type as $issue)
                            <tr>
                                <td><a href="{{ url('/issues') }}/{{$issue->id }}"> {{ date('ymd').'-'.$issue->id}}</a> </td>
                                <td>
                                   {{ $issue->user->name}}
                                </td>
                                <td> {{ $issue->issue_subject }}</td>
                                <td>
                                    <label class="badge badge-gradient-info">{{ $issue->issue_status}}</label>
                                </td>
                                <td> {{$issue->created_at->format('M - d - Y')}} </td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
@endsection