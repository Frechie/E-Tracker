@extends('inc.admin.portal-layout')

@section('content')
<section class="container-fluid">
  <div class="row">
    <div class="col-12 grid-margin">

      @if(session()->has('successMessage'))
      <div class="alert alert-success" role="alert">
        <h5 class="">{{ session()->get('successMessage') }}</h5>
      </div>
      @endif
      @if(session()->has('deletionMessage'))
      <div class="alert alert-danger" role="alert">
        <h5 class="">{{ session()->get('deletionMessage') }}</h5>
      </div>
      @endif
      @if(session()->has('newCategoryMessage'))
      <div class="alert alert-info" role="alert">
        <h5 class="">{{ session()->get('newCategoryMessage') }}</h5>
      </div>
      @endif

      <div class="card">
        <div class="card-body bg-light">
          <div class="row">
            <div class="col-md-9 col-sm-12">
              <h5 class="card-title text-info">Module/Asset Classification</h5>
            </div>
          </div>
          <hr>
          <div class="table-responsive">
            <table class="table table-striped table-bordered">
              @if( $cat_model->count() === 0 )
              <h4 class="text-danger">Data not available!!</h4>
              @else

              <thead class="bg-info text-white text-center">
                <tr>
                  <th class=""> Name </th>
                  <th class=""> Description </th>
                  <th class=""> Created By </th>
                  <th class=""> Date</th>
                  <th class=""> Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($cat_model as $category)
                <tr>
                  <td> {{ $category->category_name }} </td>
                  <td class="text-wrap"> {{ $category->category_description }} </td>
                  <td class="">{{ $category->getUser->name}} </td>
                  <td class=""> {{ $category->created_at->format('D, d M Y')}}</td>
                  <td class="">
                    <div class="row text-center">
                      <a href="{{ url('/categories') }}/{{ $category->id }}/edit" class="col-md-6">
                        <i class="icofont icofont-edit text-info"></i>
                      </a>
                      <a class="col-md-6" href="{{ url('/categories') }}/{{ $category->id }}">
                        <i class="icofont icofont-ui-delete text-danger"></i>
                      </a>
                    </div>
                  </td>
                </tr>
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