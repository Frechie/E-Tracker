@extends('inc.layout')

@section('content')<div class="row">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body bg-light">
                <h4 class="card-title text-danger"> Warning!!!</h4>
                <p class="card-description text-danger text-bold">
                    By clicking the button below, you delete <strong>{{ $deleteCategory->category_name }}</strong> permanantly.
                </p>
                <form class="" method="DELETE" action="{{ url('/delete_category') }}/{{ $deleteCategory->id }}">
                    @csrf
                    <button type="submit" class="btn btn-gradient-danger mr-2">Confirm Deletion</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection