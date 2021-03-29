@extends('inc.admin.portal-layout')

@section('content')
<section class="container-fluid">
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body bg-light">
                    <h4 class="card-title"> Upadate Assest Classes </h4>
                    <form method="POST" action="{{ url('/clients') }}/{{ $client->client_id }}">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="Name">Name</label>
                            <input type="text" class="form-control" name="cat_name" value="{{ $client->client_name }}" id="Name" placeholder="Name" required autofocus>
                        </div>
                        <div class="form-group">
                            <label for="Description">Description</label>
                            <textarea class="form-control" name="cat_desc" id="Description" rows="4" placeholder="Describe the Asset Class above" required autofocus>
                            {{ $client->client_description}}
                            </textarea>
                        </div>
                        <button type="submit" class="btn bg-purple text-white mr-2">Save Changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection