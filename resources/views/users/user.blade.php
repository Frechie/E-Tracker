@extends('inc.admin.portal-layout')

@section('content')
<section class="container-fluid">
  <div class="row">
    <div class="col-12 grid-margin">

      @if(session()->has('createUserResponse'))
      <div class="alert alert-success" role="alert">
        <h5 class="">{{ session()->get('createUserResponse') }}</h5>
      </div>
      @endif
      @if(session()->has('deleteUserResponse'))
      <div class="alert alert-danger" role="alert">
        <h5 class="">{{ session()->get('deleteUserResponse') }}</h5>
      </div>
      @endif
      @if(session()->has('editUserResponse'))
      <div class="alert alert-info" role="alert">
        <h5 class="">{{ session()->get('editUserResponse') }}</h5>
      </div>
      @endif

      <div class="card">
        <div class="card-body bg-light">
          <div class="row">
            <div class="col-md-9 col-sm-12">
              <h5 class="card-title text-info">Existing Users</h5>
            </div>
          </div>
          <hr>
          <div class="table-responsive">
            <table class="table table-striped table-bordered">
              @if( $users->count() === 0 )
              <h4 class="text-danger">Data not available!!</h4>
              @else
              <thead class="bg-info text-white text-center">
                <tr>
                  <th> Name </th>
                  <th> Email </th>
                  <th> User Type </th>
                  <th> Date</th>
                  <th> Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($users as $user)
                <tr>
                  <td> {{ $user->name }} </td>
                  <td class="text-wrap"> {{ $user->email }} </td>
                  <td> {{ $user->id}} </td>
                  <td> {{ $user->created_at->format('D, d M Y') }}</td>
                  <td>
                    <div class="row">
                      <a href="{{ url('/users') }}/{{ $user->id }}/edit/" class="col-md-4">
                        <i class="icofont icofont-edit text-info"></i>
                      </a>
                      <a class="col-md-4" href="{{ url('/users') }}/{{ $user->id }}">
                        <i class="icofont icofont-ui-delete text-danger"></i>
                      </a>
                      <a class="col-md-4" href="{{ url('/users') }}/{{ $user->id }}">
                        <i class="icofont icofont-search-document text-info"></i>
                      </a>
                    </div>
                  </td>
                </tr>
                @endforeach
                @endif
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection