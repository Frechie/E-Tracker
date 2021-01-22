@extends('inc.layout')

@section('content')<div class="row">
  <div class="col-lg-12 col-md-12 col-sm-12 grid-margin">
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
        <table class="table table-striped responsive-table">
          @if( $cat_model->count() === 0 )
          <h4 class="text-danger">Data not available!!</h4>
          <a href="{{ route('displayCatForm') }}" class="btn btn-info text-white">Add Asset Class</a>
          @else
          <thead>
            <tr class="col-sm-12">
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
                <a href="" class="">
                  <i class="mdi mdi-border-color"></i>
                </a>              
                <a class="waves-effect waves-light btn modal-trigger" href="#modal1">
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
@endsection