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
                <div class="timeline" style="margin-top: 15px;">
                    <div>
                        <i class="fas fa-envelope bg-blue"></i>
                        <div class="timeline-item">
                            <span class="time bg-blue"><i class="fas fa-clock"></i> {{ $issue->created_at->format('H:i:s') }}</span>
                            <h3 class="timeline-header bg-blue">{{ $issue->user->name}}: {{ $issue->issue_subject }}</h3>

                            <div class="timeline-body">
                                {{ $issue->issue_description}}
                            </div>
                            <div class="timeline-footer">
                                Files: <a href=""><i class="icofont icofont-download text-primary"></i></a>

                            </div>
                        </div>
                    </div>
                    <!-- END timeline item -->
                </div>

                <div class="timeline" style="margin-top: 15px;">
                    <div>
                        <i class="fas fa-envelope bg-info"></i>
                        <div class="timeline-item">
                            <span class="time bg-info"><i class="fas fa-clock"></i> {{ $issue->created_at->format('H:i:s') }}</span>
                            <h3 class="timeline-header bg-info">{{ $issue->user->name}}: {{ $issue->issue_subject }}</h3>

                            <div class="timeline-body">
                                {{ $issue->issue_description}}
                            </div>
                            <div class="timeline-footer">
                                Files: <a href=""><i class="icofont icofont-download text-primary"></i></a>

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