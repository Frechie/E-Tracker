@extends('inc.layout')

@section('content')
<div class="row">
  <div class="col-12 grid-margin">

    @if(session()->has('successMessage'))
    <div class="alert alert-success">
      <h5 class="text-success">{{ session()->get('successMessage') }}</h5>
    </div>
    @endif
    @if(session()->has('deletionMessage'))
    <div class="alert alert-danger">
      <h5 class="text-danger">{{ session()->get('deletionMessage') }}</h5>
    </div>
    @endif
    @if(session()->has('newCategoryMessage'))
    <div class="alert alert-info">
      <h5 class="text-info">{{ session()->get('newCategoryMessage') }}</h5>
    </div>
    @endif

    <div class="card">
      <div class="card-body bg-light">
        <div class="row">
          <div class="col-md-9 col-sm-12">
            <h5 class="card-title text-info">Module/Asset Classification</h5>
          </div>
          <div class="col-md-3 col-sm-12">
            <a href="{{ route('displayCatForm') }}" class="btn btn-success btn-fw">
              New Classes
              <small><i class="mdi mdi-border-color"></i></small>
            </a>
          </div>
        </div>
        <hr>
        <div class="table-responsive">
          <table class="table table-striped ">
            @if( $cat_model->count() === 0 )
            <h4 class="text-danger">Data not available!!</h4>
            <a href="{{ route('displayCatForm') }}" class="btn btn-info text-white">Add Asset Class</a>
            @else
            <thead>
              <tr class="col-sm-12 bg-dark text-white">
                <th class="text-center"> Name </th>
                <th class="text-center"> Description </th>
                <th class="text-center"> Created By </th>
                <th class="text-center"> Creation Date</th>
                <th class="text-center"> Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($cat_model as $category)
              <tr class="col-sm-12">
                <td class="py-1">
                  {{ $category->category_name }}
                </td>
                <td class="text-wrap">
                  {{ $category->category_description }}
                </td>
                <td>{{ $category->cat_created_by_uid}}
                </td>
                <td> {{ $category->created_at}}</td>
                <td>
                  <a href="{{ url('/edit_category') }}/{{ $category->id }} " class="">
                    <i class="mdi mdi-border-color"></i>
                  </a>
                  <a class="waves-effect waves-light btn modal-trigger" href="{{ url('/delete_category') }}/{{ $category->id }}">
                    <i class="mdi mdi-delete text-danger"></i>
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
@endsection