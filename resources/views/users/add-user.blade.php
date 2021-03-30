@extends('inc.admin.portal-layout')

@section('content')
<section class="container-fluid">
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body bg-light">
                    <h4 class="card-title"> Create New User</h4><br>
                    <hr>
                    <form class="" method="POST" action="{{ url('/users') }}">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="userName">User-Name:</label>
                                    <input type="text" class="form-control" name="user_name" id="userName" placeholder="Name" required autofocus>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="userEmail">Email Address:</label>
                                    <input type="email" class="form-control" name="email" id="userEmail" placeholder="Email Address" required autofocus>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                <label for="clientName">Organization:</label>
                                    <select name="client_name" class="form-control form-control-sm text-dark" id="clientName" required>
                                        @foreach($clients as $client)
                                        <option value="{{$client->client_name }}" class=" for="clientName" text-success text-bold">{{$client->client_name }} </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="roles">Select Role</label>
                                    <select name="role" class="form-control form-control-sm text-dark" id="clientName" required>
                                        <option value="Admin" class="text-success text-bold">Admin </option>
                                        <option value="Help Desk Support" class="text-success text-bold">Help Desk Support</option>
                                        <option value="Client" class="text-success text-bold">Client </option>
                                    
                                    </select>
                                </div>
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