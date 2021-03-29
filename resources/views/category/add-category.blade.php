@extends('inc.admin.portal-layout')

@section('content')
<section class="container-fluid">
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body bg-light">
                    <h4 class="card-title"> Create New Assest Classes</h4><br>
                    <p class="card-description"> Ensure the class is well known by adding description</p>
                    <form class="" method="POST" action="{{ url('/categories') }}">
                        @csrf
                        <div class="form-group">
                            <label for="categoryName">Name</label>
                            <input type="text" class="form-control" name="cat_name" id="categoryName" placeholder="Name" required autofocus>
                        </div>
                        <div class="form-group">
                            <label for="categoryDescription">Description</label>
                            <textarea class="form-control" name="cat_desc" id="categoryDescription" rows="4" placeholder="Describe the Asset Class above" required autofocus>
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