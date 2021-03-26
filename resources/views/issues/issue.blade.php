@extends('inc.admin.portal-layout')
@section('content')

@if( $issue->count() === 0 )
<h4 class="text-danger">No available data found!!</h4>
@else

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <!-- The time line -->
                <div class="card">
                    <div class="card-body">
                        <div class="card-header bg-info">
                            <h6 class="card-description text-white">
                                {{ $issue->issue_subject }}
                            </h6>
                        </div>

                        <form method="POST" action="{{ url('/issues') }}/{{ $issue->id }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="issue_description" class="text-dark">
                                    <strong>Comments:</strong>
                                </label>

                                <textarea name="issue_desc" class="form-control" id="issue_description" rows="8" required>
                                </textarea>
                            </div>

                            <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <div class="form-group">
                                        <select name="issue_status" class="form-control form-control-sm text-dark" id="category" required>
                                            <option selected="selected">Work-in-Progress</option>
                                            <option>Pending HD</option>
                                            <option>Client Accepted</option>
                                            <option>Resolved</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6">
                                    <div class="form-group">
                                        <div class="input-group col-xs-12">
                                            <input type="file" name="issue_upload" class="form-control" placeholder="Files accepted format(.log, .zip,, .png, .jpg .txt)... " required>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-12">
                                <button type="submit" class="btn bg-info w-100">Update Case</button>
                                </div>
                            </div>


                           
                        </form>
                    </div>
                </div>

                <div class="timeline" style="margin-top: 15px;">
                    <div>
                        <i class="fas fa-envelope bg-info"></i>
                        <div class="timeline-item">
                            <span class="time bg-info">
                                <i class="fas fa-clock"></i>
                                {{ $issue->created_at->format('H:i:s') }}
                            </span>
                            <h3 class="timeline-header bg-info">
                                {{ $issue->user->name}} <i class="icofont icofont-long-arrow-right"></i> {{ $issue->created_at->format('D') }}, {{ $issue->created_at->format('M d Y') }}
                            </h3>

                            <div class="timeline-body">
                                {{ $issue->issue_description}}
                            </div>
                            <div class="timeline-footer">
                                Atttached Files: 
                                <a class="text-blue" href="{{asset($issue->issue_uploads)}}" download="download">
                                {{$issue->issue_uploads}}
                                <i class="icofont icofont-download text-primary"></i>
                                </a>

                            </div>
                        </div>
                    </div>
                    <!-- END timeline item -->
                </div>
                <!-- /.col -->
            </div>
        </div>
    </div>
</section>
@endif
@endsection