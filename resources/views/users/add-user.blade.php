@extends('inc.admin.portal-layout')

@section('content')
<section class="container-fluid">
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body bg-light">
                    <h4 class="card-title"> Create New User</h4><br>
                    <hr>
                    <form class="" method="POST" action="{{ url('/clients') }}">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="userName">User Name</label>
                                    <input type="text" class="form-control" name="user_name" id="userName" placeholder="Name" required autofocus>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="userEmail">Email Address</label>
                                    <input type="text" class="form-control" name="user_name" id="userEmail" placeholder="Name" required autofocus>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <select name="client" class="form-select" aria-label="Default select example">
                                        @foreach($clients as $client)
                                        <option value="{{$client->client_name }}">{{$client->client_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <select name="client" class="form-select" aria-label="Default select example">
                                        @foreach($clients as $client)
                                        <option value="{{$client->client_name }}">{{$client->client_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn bg-purple  text-white mr-3">Create</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</section>
@endsection