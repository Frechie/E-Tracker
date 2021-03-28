@extends('inc.admin.portal-layout')

@section('content')
<section class="container-fluid">
  <div class="row">
    <div class="col-12 grid-margin">

      @if(session()->has('successMessage'))
      <div class="alert alert-success text-white">
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
              <a href="{{ url('/categories/create') }}" class="btn btn-success btn-fw">
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
              <a href="" class="btn btn-info text-white">Add Asset Class</a>
              @else
              <thead>
                <tr class="row bg-dark text-white">
                  <th class="text-center col-lg-3 col-sm-12"> Name </th>
                  <th class="text-center col-lg-5 col-sm-12"> Description </th>
                  <th class="text-center col-lg-2 col-sm-12"> Created By </th>
                  <th class="text-center col-lg-1 col-sm-12"> Date</th>
                  <th class="text-center col-lg-1 col-sm-12"> Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($cat_model as $category)
                <tr class="row">
                  <td class="col-lg-3 col-sm-12">
                    {{ $category->category_name }}
                  </td>
                  <td class="col-lg-5 text-wrap">
                    {{ $category->category_description }}
                  </td>
                  <td class="col-lg-2">{{ $category->cat_created_by_uid}}
                  </td>
                  <td class="col-lg-1"> {{ $category->created_at}}</td>
                  <td class="col-lg-1">
                    <a href="{{ url('/categories') }}/{{ $category->id }}/edit" class="col-lg-6">
                      <i class="icofont icofont-edit text-info"></i>
                    </a>
                    <a class="col-lg-6" href="{{ url('/categories') }}/{{ $category->id }}">
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