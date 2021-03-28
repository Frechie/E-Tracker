@extends('inc.admin.portal-layout')

@section('content')
<section class="container-fluid">
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body bg-light">
                    <h4 class="card-title text-danger"> Warning!!!</h4>
                    <br><hr>
                    <p class="card-description text-danger text-bold">
                        Do you really want to delet <strong>&apos;{{ $deleteCategory->category_name }}&apos;</strong> permanantly.
                    </p>
                    <form class="" method="POST" action="{{ url('/categories') }}/{{ $deleteCategory->id }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger mr-2">Confirm Deletion</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection