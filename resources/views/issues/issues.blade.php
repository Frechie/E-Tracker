@extends('inc.layout')

@section('content')

<div class="row">
  <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body bg-secondary">
        <!-- <h4 class="card-title">Default form</h4> -->
        <p class="card-description"> Kindly fill in your personal information as required </p>
        <form class="forms-sample">

        <div class="form-group">
                      <label for="exampleFormControlSelect3">Issue Category</label>
                      <select class="form-control form-control-sm" id="exampleFormControlSelect3">
                        <option>Technical</option>
                        <option>Front Office</option>
                        <option>Back office</option>
                        <option>ALM</option>
                        <option>Others</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <label for="exampleFormControlSelect2">Issue Severity</label>
                      <select class="form-control" id="exampleFormControlSelect2">
                        <option>P1</option>
                        <option>P2</option>
                        <option>P3</option>
                        <option>P4</option>
                        <option>P5</option>
                      </select>
                    </div>
            

          <div class="form-group">
            <label for="exampleSelectGender"> Are you a Seico Consultant ? </label>
            <select class="form-control" id="exampleSelectGender">
              <option>Yes</option>
              <option>No</option>
            </select>
          </div>

          <div class="form-group">
            <label for="exampleTextarea1">Kindly explain the issues you have here?</label>
            <textarea class="form-control" id="exampleTextarea1" rows="8"></textarea>
          </div>

          <div class="form-group">
                        <label>Upload issue log files and screenshoot </label>
                        <input type="file" name="img[]" class="file-upload-default">
                        <div class="input-group col-xs-12">
                          <input type="text" class="form-control file-upload-info btn-light" disabled placeholder="Log files and screen shot">
                          <span class="input-group-append">
                            <button class="file-upload-browse btn btn-light" type="button">Upload</button>
                          </span>
                        </div>
                      </div>

                      <div class="form-group">
                        <label>Upload issue log files and screenshoot </label>
                        <input type="file" name="img[]" class="file-upload-default">
                        <div class="input-group col-xs-12">
                          <input type="text" class="form-control file-upload-info btn-light" disabled placeholder="Log files and screen shot">
                          <span class="input-group-append">
                            <button class="file-upload-browse btn btn-light" type="button">Upload</button>
                          </span>
                        </div>
                      </div>

          <button type="submit" class="btn btn-light mr-2">Submit</button>
          <button class="btn btn-light">Cancel</button>
        </form>
      </div>
    </div>
  </div>


  @endsection