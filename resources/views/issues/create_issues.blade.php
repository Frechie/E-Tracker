@extends('inc.layout')

@section('content')

<div class="row">
  <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body bg-light">
        <h3 class="card-description text-info">
          What issue are you experiencing?
        </h3>
        <form class="forms-sample" method="POST" action="{{ url('/issues') }}">
          @csrf

          <div class="row">
            <div class="col-lg-6 col-md-6">
              <div class="form-group">
                <label for="category" class="text-dark">Select an Asset Class</label>
                <select name="asset_class" class="form-control form-control-sm text-dark" id="asset-class" required>
                  <option>Technical</option>
                  <option>Front Office</option>
                  <option>Back office</option>
                  <option>ALM</option>
                  <option>Others</option>
                </select>
              </div>
            </div>

            <div class="col-lg-6 col-md-6">
              <div class="form-group">
                <label for="category" class="text-dark">Select a Category</label>
                <select name="issue_cat" class="form-control form-control-sm text-dark" id="category" required>
                  <option>Technical</option>
                  <option>Front Office</option>
                  <option>Back office</option>
                  <option>ALM</option>
                  <option>Others</option>
                </select>
              </div>
            </div>
          </div>

          <div class="form-group">
            <label for="issue_description" class="text-dark">
              Kindly explain the issues you have here?
            </label>
            <textarea name="issue_desc" class="form-control" id="issue_description" rows="8" required>

            </textarea>
          </div>

          <div class="row">
            <div class="col-lg-6 col-md-12">
              <div class="form-group">
                <label for="issue_severity" class="text-dark">
                  Issue Severity
                </label>
                <select name="issue_severity" class="form-control form-control-sm text-dark" id="issue_severity" required>
                  <option>P1</option>
                  <option>P2</option>
                  <option>P3</option>
                  <option>P4</option>
                  <option>P5</option>
                </select>
              </div>
            </div>

            <div class="col-lg-6 col-md-12">
              <div class="form-group">
                <label>Add log files </label>
                <div class="input-group col-xs-12">
                  <input type="file" name="logFile" class="form-control" placeholder="Log Files accepted format(.log, .zip,, .png, .jpg .txt)... " required>
                </div>
              </div>
            </div>
          </div>

          <button type="submit" class="btn btn-gradient-primary mr-2">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection