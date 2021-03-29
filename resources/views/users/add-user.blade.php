@extends('inc.admin.portal-layout')

@section('content')
<section class="container-fluid">
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body bg-light">
                    <h4 class="card-title"> Add a client</h4><br>
                    <form class="" method="POST" action="{{ url('/clients') }}">
                        @csrf
                        <div class="form-group">
                            <label for="clientName">Name</label>
                            <input type="text" class="form-control" name="client_name" id="clientName" placeholder="Name" required autofocus>
                        </div>
                        <div class="form-group">
                            <label for="clientDescription">Description</label>
                            <textarea class="form-control" name="client_desc" id="clientDescription" rows="4" placeholder="Describe the Asset Class above" required autofocus>
                        </textarea>
                        </div>
                        <button type="submit" class="btn bg-purple  text-white mr-3">Create</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</section>
@endsection