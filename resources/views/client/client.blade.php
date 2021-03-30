@extends('inc.admin.portal-layout')

@section('content')
<section class="container-fluid">
  <div class="row">
    <div class="col-12 grid-margin">

      @if(session()->has('createClientMessage'))
      <div class="alert alert-success" role="alert">
        <h5 class="">{{ session()->get('createClientMessage') }}</h5>
      </div>
      @endif
      @if(session()->has('deletionMessage'))
      <div class="alert alert-danger" role="alert">
        <h5 class="">{{ session()->get('deletionMessage') }}</h5>
      </div>
      @endif
      @if(session()->has('newclientsMessage'))
      <div class="alert alert-info" role="alert">
        <h5 class="">{{ session()->get('newclientsMessage') }}</h5>
      </div>
      @endif

      <div class="card">
        <div class="card-body bg-light">
          <div class="row">
            <div class="col-md-9 col-sm-12">
              <h5 class="card-title text-info">Available Clients</h5>
            </div>
          </div>
          <hr>
          <div class="table-responsive">
            <table class="table table-striped table-bordered">
              @if( $clients->count() === 0 )
              <h4 class="text-danger">Data not available!!</h4>
              @else
              <thead class="bg-info text-white">
                <tr>
                  <th> Name </th>
                  <th> Description </th>
                  <th class="text-center col-md-2"> Created By </th>
                  <th class="text-center col-md-2"> Date</th>
                  <th class="text-center col-md-2"> Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($clients as $client)
                <tr>
                  <td> {{ $client->client_name }} </td>
                  <td> {{ $client->client_description }} </td>
                  <td> </td>
                  <td> {{ $client->created_at->format('D, d M Y')}}</td>
                  <td>
                    <div class="row text-center">
                      <a href="{{ url('/clients') }}/{{ $client->client_id }}/edit/" class="col-lg-6">
                        <i class="icofont icofont-edit text-info"></i>
                      </a>
                      <a class="col-lg-6" href="{{ url('/clients') }}/{{ $client->id }}">
                        <i class="icofont icofont-ui-delete text-danger"></i>
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