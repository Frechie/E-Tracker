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
                        <div class="card-header bg-blue">
                            <h5 class="card-description text-white">
                                {{ $issue->issue_subject }}
                            </h5>
                        </div>

                        <form class="forms-sample" method="POST" action="{{ url('/issues') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="row">
                                <div class="col-lg-3 col-md-6">
                                    <div class="form-group">
                                        <label for="category" class="text-dark">Select an Asset Class</label>
                                        <select name="asset_class" class="form-control form-control-sm text-dark" id="asset-class" required>
                                            @foreach($categories as $cat)
                                            <option>{{ $cat->category_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-6">
                                    <div class="form-group">
                                        <label for="category" class="text-dark">Select a Category</label>
                                        <select name="issue_cat" class="form-control form-control-sm text-dark" id="category" required>
                                            <option>Technical</option>
                                            <option>Front Office</option>
                                            <option>Back office</option>
                                            <option>ALM</option>
                                            <option>Others</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-6">
                                    <div class="form-group">
                                        <label for="issue_severity" class="text-dark">
                                            Issue Severity
                                        </label>
                                        <select name="issue_severity" class="form-control form-control-sm text-dark" id="issue_severity" required>
                                            <option>P1</option>
                                            <option>P2</option>
                                            <option>P3</option>
                                            <option>P4</option>
                                            <option>P5</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-6">
                                    <div class="form-group">
                                        <label>Add log files </label>
                                        <div class="input-group col-xs-12">
                                            <input type="file" name="issue_upload" class="form-control" placeholder="Log Files accepted format(.log, .zip,, .png, .jpg .txt)... " required>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="issue_description" class="text-dark">
                                    <strong>Explain the issues you have here?</strong>
                                </label>

                                <textarea name="issue_desc" class="form-control" id="issue_description" rows="8" required>
              </textarea>
                            </div>

                            <button type="submit" class="btn bg-purple text-white mr-2">Update Case</button>
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
                                {{ $issue->user->name}} replied on {{ $issue->created_at->format('D') }},  {{ $issue->created_at->format('M d Y') }}
                            </h3>

                            <div class="timeline-body">
                                {{ $issue->issue_description}}
                            </div>
                            <div class="timeline-footer">
                                Atttached Files: <a href=""><i class="icofont icofont-download text-primary"></i></a>

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