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
            <table class="table table-striped ">
              @if( $clients->count() === 0 )
              <h4 class="text-danger">Data not available!!</h4>
              @else
              <thead>
                <tr class="row bg-info text-white">
                  <th class="text-center col-lg-3 col-sm-3"> Name </th>
                  <th class="text-center col-lg-5 col-sm-5"> Description </th>
                  <th class="text-center col-lg-2 col-sm-2"> Created By </th>
                  <th class="text-center col-lg-1 col-sm-1"> Date</th>
                  <th class="text-center col-lg-1 col-sm-1"> Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($clients as $client)
                <tr class="row">
                  <td class="col-lg-3 col-sm-12">
                    {{ $client->client_name }}
                  </td>
                  <td class="col-lg-5 text-wrap">
                    {{ $client->client_description }}
                  </td>
                  <td class="col-lg-2">{{ $client->client_name}}
                  </td>
                  <td class="col-lg-1"> {{ $client->created_at->format('D, d M Y')}}</td>
                  <td class="col-lg-1">
                    <a href="{{ url('/clients') }}/edit/{{ $client->client_id }}" class="col-lg-6">
                      <i class="icofont icofont-edit text-info"></i>
                    </a>
                    <a class="col-lg-6" href="{{ url('/clients') }}/{{ $client->id }}">
                      <i class="icofont icofont-ui-delete text-danger"></i>
                    </a>
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