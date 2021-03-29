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
              <thead>
                <tr class="row bg-info text-white">
                  <th class="text-center col-md-2"> Name </th>
                  <th class="text-center col-md-4"> Description </th>
                  <th class="text-center col-md-2"> Created By </th>
                  <th class="text-center col-md-2"> Date</th>
                  <th class="text-center col-md-2"> Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($clients as $client)
                <tr class="row">
                  <td class="col-lg-2 col-sm-3">
                    {{ $client->client_name }}
                  </td>
                  <td class="col-lg-4 text-wrap">
                    {{ $client->client_description }}
                  </td>
                  <td class="col-lg-2"> </td>
                  <td class="col-lg-2"> {{ $client->created_at->format('D, d M Y')}}</td>
                  <td class="col-lg-2">
                    <div class="row text-center">
                      <a href="{{ url('/clients') }}/{{ $client->client_id }}/edit/" class="col-lg-6">
                        <i class="icofont icofont-edit text-info"></i>
                      </a>
                      <a class="col-lg-6" href="{{ url('/clients') }}/{{ $client->id }}">
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