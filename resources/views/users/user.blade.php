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
              <thead>
                <tr class="row bg-info text-white">
                  <th class="text-center col-md-3"> Name </th>
                  <th class="text-center col-md-3"> Email </th>
                  <th class="text-center col-md-2"> User Type </th>
                  <th class="text-center col-md-2"> Date</th>
                  <th class="text-center col-md-2"> Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($users as $user)
                <tr class="row">
                  <td class="col-md-3 col-sm-3">
                    {{ $user->name }}
                  </td>
                  <td class="col-md-3 text-wrap">
                    {{ $user->email }}
                  </td>
                  <td class="col-md-2"> {{ $user->id}} </td>
                  <td class="col-md-2"> {{ $user->created_at->format('D, d M Y') }}</td>
                  <td class="col-md-2">
                    <div class="row">
                      <a href="{{ url('/users') }}/{{ $user->id }}/edit/" class="col-md-4">
                        <i class="icofont icofont-edit text-info"></i>
                      </a>
                      <a class="col-md-4" href="{{ url('/users') }}/{{ $user->id }}">
                        <i class="icofont icofont-ui-delete text-danger"></i>
                      </a>
                      <a class="col-md-4" href="{{ url('/users') }}/{{ $user->id }}">
                        <i class="icofont icofont-ui-delete text-danger"></i>
                      </a>
                    </div>
                  </td>
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