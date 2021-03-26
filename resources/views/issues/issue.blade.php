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
                            <span class="time bg-purple"><i class="fas fa-clock"></i> {{ $issue->created_at->format('H:i:s') }}</span>
                            <h3 class="timeline-header bg-purple">{{ $issue->user->name}}: {{ $issue->issue_subject }}</h3>

                            <div class="timeline-body">
                                {{ $issue->issue_description}}
                            </div>
                            <div class="timeline-footer">
                                Files: <a href=""><i class="icofont icofont-download text-primary"></i></a>

                            </div>
                        </div>
                    </div>
                    <!-- END timeline item -->
                    <!-- timeline item -->
                    <div>
                        <i class="fas fa-user bg-green"></i>
                        <div class="timeline-item">
                            <span class="time"><i class="fas fa-clock"></i> 5 mins ago</span>
                            <h3 class="timeline-header no-border"><a href="#">Sarah Young</a> accepted your friend request</h3>
                        </div>
                    </div>
                    <!-- END timeline item -->
                    <!-- timeline item -->
                    <div>
                        <i class="fas fa-comments bg-yellow"></i>
                        <div class="timeline-item">
                            <span class="time"><i class="fas fa-clock"></i> 27 mins ago</span>
                            <h3 class="timeline-header"><a href="#">Jay White</a> commented on your post</h3>
                            <div class="timeline-body">
                                Take me to your leader!
                                Switzerland is small and neutral!
                                We are more like Germany, ambitious and misunderstood!
                            </div>
                            <div class="timeline-footer">
                                <a class="btn btn-warning btn-sm">View comment</a>
                            </div>
                        </div>
                    </div>
                    <!-- END timeline item -->
                    <!-- timeline time label -->
                    <div class="time-label">
                        <span class="bg-green">3 Jan. 2014</span>
                    </div>
                    <!-- /.timeline-label -->
                    <!-- timeline item -->
                    <div>
                        <i class="fa fa-camera bg-purple"></i>
                        <div class="timeline-item">
                            <span class="time"><i class="fas fa-clock"></i> 2 days ago</span>
                            <h3 class="timeline-header"><a href="#">Mina Lee</a> uploaded new photos</h3>
                            <div class="timeline-body">
                                <img src="http://placehold.it/150x100" alt="...">
                                <img src="http://placehold.it/150x100" alt="...">
                                <img src="http://placehold.it/150x100" alt="...">
                                <img src="http://placehold.it/150x100" alt="...">
                                <img src="http://placehold.it/150x100" alt="...">
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