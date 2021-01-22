@extends('inc.layout')

@section('content')<div class="row">
  <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body bg-light">
      <div class="col-lg-6">    
        <h4 class="card-title text-primary">Module/Asset Classification</h4>
        </div>
        <div class="col-lg-6">
        <a href="{{ route('displayCatForm') }}" class="btn btn-gradient-success mr-2">Add New Asset Classes</a>
        </div>
        <table class="table table-striped">
          @if( $cat_model->count() === 0 )
          <h4 class="text-danger">Data not available!!</h4>
          <a href="{{ route('displayCatForm') }}" class="btn btn-info text-white">Add Asset Class</a>
          @else
          <thead>
            <tr>
              <th class="text-center"> Name </th>
              <th class="text-center"> Description </th>
              <th class="text-center"> Created By </th>
              <th class="text-center"> Creation Date</th>
              <th class="text-center"> Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($cat_model as $category)
            <tr>
              <td class="py-1">
                {{ $category->category_name }}
              </td>
              <td class="text-wrap">
                {{ $category->category_description }}
              </td>
              <td>{{ $category->id }}
              </td>
              <td> {{ $category->created_at}}</td>
              <td>
                <a href="" class="btn btn-gradient-info mr-2">Edit</a>
                <a href="" class="btn btn-gradient-danger mr-2">Delete</a>
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