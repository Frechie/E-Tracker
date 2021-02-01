@extends('inc.layout')
@section('content')
<div class="row">
    <div class="row">
        <div class="col-lg-4 col-md-5 col-sm-12">
            <div class="card card-outline">
                <div class="card-body box-profile">
                    <div class="text-center">
                   
                        <img class="rounded-circle img-fluid w-100" src="{{ asset('assets/images/faces/face1.jpg') }}" alt="image">
                        
                    </div>
                    <a href="" class="">
                    <i class="mdi mdi-border-color left-align"></i>
                    </a>
                    <h3 class="profile-username text-center">{{ Auth::user()->name }}</h3>

                    <p class="text-muted text-center">Technical Analyst</p>
                    <p class="text-primary font-weight-bold text-center">{{ Auth::user()->email }}</p>

                    <ul class="list-group list-group-unbordered mb-3">
                        <li class="list-group-item text-success">
                            <b>Resolved</b> <a class="float-right">10</a>
                        </li>
                        <li class="list-group-item text-danger">
                            <b>Open</b> <a class="float-right">5</a>
                        </li>
                        <li class="list-group-item text-info">
                            <b>Total</b> <a class="float-right">15</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="card" style="margin-top: 15px;">
                <div class="card-header bg-info">
                    <h3 class="card-title text-white text-center">About</h3>
                </div>
                <div class="card-body">
                    <strong><i class="mdi mdi-book-open-page-variant mr-1"></i> Education</strong>
                    <p class="text-muted">
                        B.S. in Computer Science from the University of Tennessee at Knoxville
                    </p>
                    <hr>
                    <strong><i class="mdi mdi-map-marker-multiple mr-1"></i> Location</strong>
                    <p class="text-muted">Malibu, California</p>
                    <hr>

                    <strong><i class="mdi mdi-checkbox-marked-circle-outline mr-1"></i> Skills</strong>

                    <p class="text-muted">
                        <span class="tag tag-danger">UI Design</span>
                        <span class="tag tag-success">Coding</span>
                        <span class="tag tag-info">Javascript</span>
                        <span class="tag tag-warning">PHP</span>
                        <span class="tag tag-primary">Node.js</span>
                    </p>
                </div>
            </div>
        </div>

        <div class="col-lg-8 col-md-7 col-sm-12">
            <div class="card">
                <div class="card-header p-2">
                    <ul class="nav nav-pills">
                        <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Activity</a></li>
                        <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Edit Profile</a></li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content">
                        <div class="active tab-pane" id="activity">

                            <div class="post">
                                <div class="row">
                                    <div class="col-lg-2 col-md-4">
                                        <img class="rounded-circle img-bordered-sm" style="height: 50px; width:50px;" src="{{ asset('assets/images/faces/face2.jpg') }}" alt="user image">
                                    </div>
                                    <div class="col-lg-10 col-md-8">
                                        <a href="#" class=" text-sm mr-2">
                                            <i class="mdi mdi-message-text mr-1"></i>
                                            Jonathan Burke Jr sent a message on 2021-01-22
                                        </a>
                                    </div>
                                </div>
                                <hr>
                            </div>

                            <div class="post">
                                <div class="row">
                                    <div class="col-lg-2 col-md-4">
                                        <img class="rounded-circle img-bordered-sm" style="height: 50px; width:50px;" src="{{ asset('assets/images/faces/face2.jpg') }}" alt="user image">
                                    </div>
                                    <div class="col-lg-10 col-md-8">
                                        <a href="#" class="text-sm mr-2">
                                            <i class="mdi mdi-message-text mr-1"></i>
                                            Jonathan Burke Jr sent a message on 2021-01-22
                                        </a>
                                    </div>
                                </div>
                                <hr>
                            </div>

                            <div class="post">
                                <div class="row">
                                    <div class="col-lg-2 col-md-4">
                                        <img class="rounded-circle img-bordered-sm" style="height: 50px; width:50px;" src="{{ asset('assets/images/faces/face2.jpg') }}" alt="user image">
                                    </div>
                                    <div class="col-lg-10 col-md-8">
                                        <a href="#" class="text-sm mr-2">
                                            <i class="mdi mdi-message-text mr-1"></i>
                                            Jonathan Burke Jr sent a message on 2021-01-22
                                        </a>
                                    </div>
                                </div>
                                <hr>
                            </div>

                            <div class="post">
                                <div class="row">
                                    <div class="col-lg-2 col-md-4">
                                        <img class="rounded-circle img-bordered-sm" style="height: 50px; width:50px;" src="{{ asset('assets/images/faces/face2.jpg') }}" alt="user image">
                                    </div>
                                    <div class="col-lg-10 col-md-8">
                                        <a href="#" class="text-sm mr-2">
                                            <i class="mdi mdi-message-text mr-1"></i>
                                            Jonathan Burke Jr sent a message on 2021-01-22
                                        </a>
                                    </div>
                                </div>
                                <hr>
                            </div>

                            <div class="post">
                                <div class="row">
                                    <div class="col-lg-2 col-md-4">
                                        <img class="rounded-circle img-bordered-sm" style="height: 50px; width:50px;" src="{{ asset('assets/images/faces/face2.jpg') }}" alt="user image">
                                    </div>
                                    <div class="col-lg-10 col-md-8">
                                        <a href="#" class="text-sm mr-2">
                                            <i class="mdi mdi-message-text mr-1"></i>
                                            Jonathan Burke Jr sent a message on 2021-01-22
                                        </a>
                                    </div>
                                </div>
                                <hr>
                            </div>

                            <div class="post">
                                <div class="row">
                                    <div class="col-lg-2 col-md-4">
                                        <img class="rounded-circle img-bordered-sm" style="height: 50px; width:50px;" src="{{ asset('assets/images/faces/face2.jpg') }}" alt="user image">
                                    </div>
                                    <div class="col-lg-10 col-md-8">
                                        <a href="#" class="text-sm mr-2">
                                            <i class="mdi mdi-message-text mr-1"></i>
                                            Jonathan Burke Jr sent a message on 2021-01-22
                                        </a>
                                    </div>
                                </div>
                                <hr>
                            </div>
                            <div class="post">
                                <div class="row">
                                    <div class="col-lg-2 col-md-4">
                                        <img class="rounded-circle img-bordered-sm" style="height: 50px; width:50px;" src="{{ asset('assets/images/faces/face2.jpg') }}" alt="user image">
                                    </div>
                                    <div class="col-lg-10 col-md-8">
                                        <a href="#" class="text-sm mr-2">
                                            <i class="mdi mdi-message-text mr-1"></i>
                                            Jonathan Burke Jr sent a message on 2021-01-22
                                        </a>
                                    </div>
                                </div>
                                <hr>
                            </div>
                        </div>

                        <!----------------------------------------------------------------------------------------------------->

                        <div class="tab-pane" id="settings">
                            <form class="form-horizontal">
                                <div class="form-group row">
                                    <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control form-control-plaintext" id="inputName" value="{{ Auth::user()->name }}" placeholder="Name" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control form-control-plaintext" id="inputEmail" value="{{ Auth::user()->email }}" placeholder="Email" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputName2" class="col-sm-2 col-form-label">Role</label>
                                    <div class="col-sm-10">
                                        <select class="custom-select" name="role" id="">
                                            <option selected>Choose a Role</option>
                                            <option value="Technical Analyst">Technical Analyst</option>
                                            <option value="BA Front Office">BA Front Office</option>
                                            <option value="BA Back Office">BA Back Office</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputExperience" class="col-sm-2 col-form-label">Level</label>
                                    <div class="col-sm-10">
                                    <select class="custom-select" name="level" id="">
                                            <option selected>Choose a Level</option>
                                            <option value="Beginner">0 - 1</option>
                                            <option value="Professional">1 - 3</option>
                                            <option value="Senior Professional">3 - 5 </option>
                                            <option value="Expert">6+</option>
                                        </select>    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputSkills" class="col-sm-2 col-form-label">Skills</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputSkills" placeholder="Skills">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="offset-sm-2 col-sm-10">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="offset-sm-2 col-sm-10">
                                        <button type="submit" class="btn btn-danger">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection